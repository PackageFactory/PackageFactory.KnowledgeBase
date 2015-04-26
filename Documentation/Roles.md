# Roles

This document describes all roles used for user story definitions. Please ensure to mention these roles according to their definition.

## Instance Roles

These roles apply to any kind of end user of the software.

### Administrator

The Administrator manages a running instance of PackageFactory.Knowledgebase through its Web UI. Tis role can be considered to be partly technical, as we can suppose it to have experience with similar web application tooling.

The Administrator also shares every other requirement with all other Instance Roles.

### Author

The Author ist the one creating and editing the main article-based content. The author is strictly non-technical.

### Editor

The Editor shares all requirements with the Author, but also has requirements for creating and editing aggregated content. To achieve the latter task, the Editor can be considered partly technical, for he might have knowledge about HTML and scripting.

### Reviewer

The Reviewer will read and evaluate contents written by the Author. His requirements will cover meta information about content and tools to express review results.

### Moderator

The Moderator will be able to restrict permissions and regulate as well content and users.

### Bot

The Bot might share requirements with all other roles, but will also have the ability to perform specialized automated tasks.

### User

The User will read contents written by the Editor or Author.

## Dev Roles

These rules apply to anyone contributing to the project.

### Core Team Member

The Core Team Member has access to the project repositories on github.com as well as all infrastructural software (e.g. slack, kanboard).

The Core Team Member is required to obey the defined workflow rules.

The Core Team Member is required to display issues in the dedicated kanboard instance.

### Contributor

The Contributor basically has the opportunity to create pull requests to contribute to the project. This role won't have access to the repositories or any other infrastructural software.

The Contributor will display issues via the github issue tracker.
