; WUNDERSITES >> HUB
;
; Base make file
;
; This is the base make file that includes other make files depending on the
; project or installation context.
;

; Core version
core = 8.x

; API version
api = 2

; Drupal core
; Specific version
;projects[drupal][version] = 8.0

; Head from git
projects[drupal][download][type]    = git
projects[drupal][download][url]     = http://git.drupal.org/project/drupal.git
projects[drupal][download][branch]  = 8.0.x

; Installation profile: COPIED LOCALLY


; Includes
; include other make files from local or remote destinations

; hub contrib projects
;includes[contrib] = "contrib.make"
;Developer includes
includes[dev]     = "dev.make"
