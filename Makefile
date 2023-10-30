copy_first:
	cp -r firstside /opt/lampp/htdocs/

copy_primer:
	cp -r php_primer /opt/lampp/htdocs/

start_lampp:
	# Try to start lampp
	-sudo /opt/lampp/lampp start 2>&1 | tee /tmp/lampp_start_output

	# Pause to give lampp time to attempt to start services
	-sleep 5

	# Check lampp status
	-sudo /opt/lampp/lampp status 2>&1 | tee /tmp/lampp_status_output

	# Check if apache2 has already started or other errors occurred
	@if grep -q "Another web server is already running" /tmp/lampp_start_output; then \
		echo "Apache2 already started. Stopping and starting lampp."; \
		sudo systemctl stop apache2.service; \
		sleep 2; \
		sudo /opt/lampp/lampp stop; \
		sleep 2; \
		sudo /opt/lampp/lampp start; \
	elif grep -q "XAMPP is currently only availably as 32 bit application" /tmp/lampp_status_output; then \
		echo "32-bit error detected. Handle it here."; \
	elif grep -q "Apache is not running" /tmp/lampp_status_output; then \
		echo "Lampp failed to start."; \
	else \
		echo "Lampp started successfully."; \
	fi


