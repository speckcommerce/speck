echo "database name - this script assumes the database already exists (ctrl-c to abort)"
echo -n "(leave blank for 'speck'): "
read dbname
if [ -z "$dbname" ]; then
    dbname='speck'
fi

echo "SQL user - this use must already exist and have permissions to create/modify tables in '$dbname' (ctrl-c to abort)"
echo -n "(leave blank for 'speck'): "
read user
if [ -z "$user" ]; then
    user='speck'
fi

echo "password for SQL user '$user'"
echo -n "(leave blank for 'speck'): "
read pass
if [ -z "$pass" ]; then
    pass='speck'
fi


export dir=`pwd`

cd $dir && git submodule update --init
cd $dir/vendor
ls -d */ | tr ' ' '\n' > $dir/devmodules/tempdirlist
cat $dir/devmodules/tempdirlist | while read line; do
    git clone $dir/vendor/$line $dir/devmodules/$line
    cd $dir/devmodules/$line && git pull origin master && git checkout master
    if [ -d data ]
    then
        cd $dir/devmodules/$line/data
        if [ -r 'schema.sql' ]
        then
            cat 'schema.sql' | mysql -u$user -p$pass $dbname
        fi
    fi
done
cat $dir/devmodules/tempdirlist | while read line; do
    cd $dir/devmodules/$line
    if [ -d data ]
    then
        cd $dir/devmodules/$line/data
        if [ -r 'alter.sql' ]
        then
            cat 'alter.sql' | mysql -u$user -p$pass $dbname
        fi
    fi
done
rm $dir/devmodules/tempdirlist
cd $dir
php dbconfig.php $user $pass $dbname
