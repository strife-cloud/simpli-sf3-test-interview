# simpli-sf3-test-interview

# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

This repository is for testing SF3 skills of candidates who apply to a job at Simplifia.

### How do I get set up? ###

Be sure to have PHP7 installed on your machine  
Fork the project
Clone the repository  
cd simpli-sf3-test-interview  
composer install  
To run server : php bin/console server:run  
Create a new branch named *interview/yourfirstname-yourlastname* from master. Never commit or push into master!  

### Mission ###

Your mission is to create a page whose link is *yourdomain/my-work*  
On this page, you will show a title and a table (see https://github.com/simplifia/simpli-sf3-test-interview/blob/master/simpli-sf3-test-interview-mockup.PNG) with the correct CSS.  
The page shows the sum of the 2 numbers. If the result number is a odd, you show 'Impair', if it's not you show 'Paire'  
The input data are available in *app/config/config.yml* in *inputData* parameter.  
The inputData are computing by a *service* (so not directly by the controller). So the service has *inputData* as input and has the final array (summed and parity) as ouput.  


### Contribution guidelines ###
When you start working, please push an initial commit.  
After that, please push at least one commit every 30 minutes.  
When you are done, please create a Pull Request (https://help.github.com/articles/creating-a-pull-request-from-a-fork/)
