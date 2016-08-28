; This is a comment. Anything starting with a semicolon is a comment
; and will be ignored by the parser. Blank lines are also ignored.

; The file uses standard info file format:
; attribute = value

; The value can optionally be quoted, which sometimes happens in this
; example for better formatting.
; attribute = "quoted value"

; REQUIRED ATTRIBUTES

; The Drush Make API version. This should always be 2.
api = 2

; The version of Drupal the profile is built for. Although you can leave this
; as '7.x', it's better to be precise and define the exact version of core your
; distribution works with.
core = 7.44

; It is also necessary to define project type to be core as well
projects[drupal][type] = core

; However, if you're trying to define patches for core, need a -dev release,
; or want anything more fancy than an official release, you need to put all
; of that into a separate 'drupal-org-core.make' file. See below for details.
; In that case, leaving this as 'core = 7.x' is fine.
