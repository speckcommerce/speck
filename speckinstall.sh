echo -n "SQL user (leave blank for 'root'): "
read user
if [ -z "$user" ]; then
    user='root'
fi

echo -n "password for SQL user '$user': "
read pass

echo -n "database name (leave blank for 'speck'): "
read dbname
if [ -z "$dbname" ]; then
    dbname='speck'
fi

export dir=`pwd`

mysql -u$user -p$pass -e "drop schema if exists $dbname"
mysql -u$user -p$pass -e "create schema if not exists $dbname"
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
            cat 'schema.sql' | mysql -uroot -pgq9wm2 $dbname
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
            cat 'alter.sql' | mysql -uroot -pgq9wm2 $dbname
        fi
    fi
done
rm $dir/devmodules/tempdirlist
cd $dir
php dbconfig.php $user $pass $dbname
