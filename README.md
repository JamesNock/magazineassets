# MagazineAssets Plugin - FlipBuilder integration with CraftCMS:

## Background
I ran into a problem whereby I needed to incorporate a magazine into a CraftCMS website that had been generated using a neat bit of software by the name of '[FlipBuilder](http://www.flipbuilder.com/)'. This would be a regular thing, so I was hoping I'd simply be able to drag and drop the outputted files into the templates folder and that it would magically work.

It didn't. So I wrote this plugin. The full story and more info can be found on my [blog](https://www.james-nock.co.uk/blog/tutorials/2018/06/30/craftcms-flipbuilder-plugin/)

## Install Instructions

Drag this plugin into your `craft/plugins` folder

Update your `config/general.php` file to look something like this:

Replace the contents of `files/magazines/july-2018/files` and `files/magazines/july-2018/mag` with the exported files from FlipBuilder. Feel free to update july-2018 to an issue name/number/date of your choice, just make sure that the folder inside `craft/templates/magazines` matches this name. Once the `files/magazines/july-2018/files` and `files/magazines/july-2018/mag` folders have files in them the .gitkeep files can be removed.

```
<?php
    return [
    	// etc.
        'environmentVariables' => [
            'internalAssetsPath' => CRAFT_BASE_PATH . "../files/",
        ]
    ];
?>
```

## Notes
If you want to run the magazine from another place then move the location of the `index.html` template and update the Plugin `registerSiteRoutes` method to match the location.
