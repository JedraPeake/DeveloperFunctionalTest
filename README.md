# Developer Functional Test
### Running Locally
- install php 7.1+ locally
- php -S localhost:8000 kirby/router.php
- application at http://localhost:8000
- panel at http://localhost:8000/panel

### Requirements
#### Development
- duplicate of https://cdainterview.com/
	- only needs home and contact page
- images, text, frontend resources can be from existing site
-  the following should be easy accessible to non-technical admins:
	- change images
	- switch to make any page no index
	- easy to change text
	- easy to style text (h1, bold, links, center, etc)
	- space for:
		- each page meta title and desc
		- google analytics tag
		- facebook advertising pixel
		- link any email to the form
- mobile responsive
- should score atleast 80 using Google PageSpeed tool

#### Deployment
- host the website on a mock server/domain
- make sure the two pages are set to no index
- the panel needs to be password protected
- website needs to be password protected

#### Stretch Goals
- use kirby (https://getkirby.com/)
- use a platform that isn't WordPress

#### Other
- time track throughout the phases

### Help
- https://getkirby.com/docs/cookbook/setup/kirby-in-a-nutshell