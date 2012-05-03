This vesion of MyInfusion was built from an unreleased version of Infusion
(4ae57474202ef1020efad64709079659974d7122) using the following command:

Build the minified Infusion:
ant customBuild -Dinclude="uiOptions" -lib lib/rhino

Build the un-minified Infusion:
ant customBuild -Dinclude="uiOptions" -lib lib/rhino -DnoMinify="true"
