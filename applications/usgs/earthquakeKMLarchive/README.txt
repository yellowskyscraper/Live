WORKFLOW FOR THIS
Because I can never seem to remember.

KML Earthquake files from USGS
from: http://earthquake.usgs.gov/earthquakes/eqarchives/epic/kml/ 
in: /kmls/XXXX_Earthquakes_ALL.kml

Run archive.php first to generate a CSV in browser view source and copy CSV format
url: /applications/usgs/earthquakeKMLarchive/archive.php?year=XXXX

Concatenate New CSV to last 
1973-XXXW + XXXX

Upload new full CSV to a Google Fusion Table.

Run retrieveCSV.php to generate XML