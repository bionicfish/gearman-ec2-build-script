gearman-ec2-build-script
========================

##Description
Building and installing gearman from scratch on an amazon aws ec2 server can be a complex challenge. The following script can be cut and pasted into the terminal window of a newly built "Amazon Linux AMI" instance. The script will not only install the lastest version of gearman but will also configure it and install additional components (supervisord) to have a fully functional gearman server with php support.   

##Main Workflow
1. Update / Patch base instance  
2. Install all dependences
3. Download, build, and install gearman
4. Configure gearman (add user, create log files, enable auto startup)
5. Download, build, and install supervisord
6. Configure supervisord (create init.d file, create supervisord.conf, enable auto startup)
7. Create working directories for gearman workers and supervisord log files
8. Create a test gearman worker (reverse_worker.php) and enable for auto start via supervisord
9. Run test gearman client (reverse_client.php)
