gearman-ec2-build-script
========================

##Description
Building and installing gearman from scratch on an amazon aws ec2 server can be a complex challenge. The following script can be cut and pasted into the terminal window of a newly built "Amazon Linux AMI" instance. The script will not only install the lastest version of gearman but will also configure it and install additional components (supervisord) to have a fully functional gearman server with php support.   

##How to use this script?
Coming soon...

##Main Workflow
1. Update / Patch base instance  
2. Install all dependences
3. Download, build, and install gearman
4. Configure gearman (add user, create log files, enable auto startup)
5. Build PHP environment and install the PECL/Gearman extension
5. Download, build, and install supervisord (via python-setuptools/easy_install)
6. Configure supervisord (create init.d file, create supervisord.conf, enable auto startup)
7. Create working directories for gearman workers and supervisord log files
8. Create a test gearman worker (reverse_worker.php) and enable for auto start via supervisord
9. Run test gearman client (reverse_client.php)

##Main Components Installed
* Gearman 1.1.9
* Supervisord x.x
* PECL/Gearman extension

##Additional Dependencies/Components Installed
* 'Development Tools' (yum group install)
* boost-devel
* gperf
* libevent-devel
* sqlite-devel
* libmemcached-devel
* mysql-devel
* mysql
* php-mysql
* php
* php-pear
* php-devel
* httpd-devel
* php-pecl-apc
* php-cli
* python-setuptools

##Directories Created
* /etc/supervisord (Supervisord configuration files)

##Files Created
* /var/log/gearmand.log (Gearman main log file)
* /etc/sysconfig/gearmand (Gearman config file)
* /etc/init.d/gearmand (Gearman init.d file)
* /etc/init.d/supervisord (Supervisord init.d file)
* /etc/supervisord/supervisord.conf (Supervisord config file)


