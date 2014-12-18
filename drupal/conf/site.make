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

; Download the latest beta
projects[drupal][download][type] = git
projects[drupal][download][url] = http://git.drupal.org/project/drupal.git
projects[drupal][download][tag] = 8.0.0-beta4

; Includes
; include other make files from local or remote destinations

; wunderhub profile
projects[wk][type] = "profile"
projects[wk][download][type] = git
projects[wk][download][url] = https://github.com/wunderkraut/wunderhub.git
projects[wk][download][branch] = develop

; hub contrib projects
includes[contrib] = "contrib.make"
;Developer includes
includes[dev]     = "dev.make"
