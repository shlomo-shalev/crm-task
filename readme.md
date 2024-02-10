# Setup
 
1. Run "docker compose run --rm composer install".
2. Copy ".env.example" file and replace name of new file to ".env".
3. Run "docker compose run --rm console regenerate-app-secret".
4. Copy ".vscode.example" directory and replace name of new directory to ".vscode".
5. Add to "MYSQL_PASSWORD" your value at ".env" file.
6. Run "docker compose up -d app".
7. You are ready!, click F5 for starting with debug mode and move to "http://localhost:50".

# Notes
If you get error from docker about platform, check if the platform of mysql service (that configure in docker compose file) match to your platform.