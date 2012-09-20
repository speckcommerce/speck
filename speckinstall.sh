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

git submodule update --init
mysql -u$user -p$pass -e "drop schema if exists $dbname"
mysql -u$user -p$pass -e "create schema if not exists $dbname"
cp vendor/* devmodules/
cd devmodules
ls -d */ | tr ' ' '\n' > tempdirlist
cat tempdirlist | while read line; do
    cd $line
    pwd
    git pull origin master
    if [ -d data ]
    then
        cd data
        if [ -r 'schema.sql' ]
        then
            cat 'schema.sql' | mysql -uroot -pgq9wm2 $dbname
        fi
        cd ../
    fi
    cd ../
done
cat tempdirlist | while read line; do
    cd $line
    if [ -d data ]
    then
        cd data
        if [ -r 'alter.sql' ]
        then
            cat 'alter.sql' | mysql -uroot -pgq9wm2 $dbname
        fi
        cd ../
    fi
    cd ../
done
rm tempdirlist
cd ../../
php dbconfig.php $user $pass $dbname
