# Routes

This chapter describes how we handle routes.

## Configuration versus annotations

Symfony offers different methods of defining routes. The most popular are the
configuration (routing.yml) and the annotation (@Route). To make a solid choice
I list the advantages of each approach here.

### Advantages of using configuration

* All routes are available in one overview
* More widely supported than annotations

### Advantages of using annotations

* Shorter syntax: no need to specify (or update) the action name
* Available in the same file where you define your action
* Deleting an action also deletes the route declaration

Here I chose the @Route annotation approach because of the better
maintainability and higher speed of development. However when developing
libraries I recommend using a configuration file because it is more widely
supported.
