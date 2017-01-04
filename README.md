# Description

Simple Magento SQL query profiler that show SQL statements executed during a request along with stack traces.

If you inherit a legacy project or install a Magento theme, chances are that your Magento website might get slow because of unnecessary SQL queries being executed. I have tried a few profiling tools, but they weren't as simple and concise as I wanted, so I built a quick tool for a project I worked on. It just shows all the queries in a table and you can easily track where are they coming from.

##### Note: Requres XDebug at the moment.

# Installation

1. Download the module files and copy them to the root of your Magento install folder.
3. Open your app/etc/local.xml and add ```<profiler>1</profiler>``` inside the ```<connection>``` node.
4. Login to admin and enable the module in System -> Configuration -> Advanced -> Developer -> LDusan QueryTrace.
4. Clear cache.

# Screenshots

![Screenshot 1](/../screenshots/screenshot1.png?raw=true)

# TODO

 - Better styling and UI
 - Eliminate XDebug dependency with debug_backtrace()
 - Composer installer
 - Shell script that enables the module