<?php
/**
 * Start Dev Server for Project
 */

echo "\nHNGi6 Server Started \n\nVisit localhost:8000 to View Site\n\nCtrl+C to Quit\n";

exec('php -S localhost:8000 -t public/');
