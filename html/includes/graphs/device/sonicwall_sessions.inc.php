<?php

//  Lives at /opt/observium/html/includes/graphs/device/sonicwall_sessions.inc.php

$rrd_filename = get_rrd_path($device, "sonicwall-sessions.rrd");

include("includes/graphs/common.inc.php");

$ds = "sessions";

$colour_area = "9999cc";
$colour_line = "0000cc";

$colour_area_max = "9999cc";

$graph_max = 1;

$unit_text = "Sessions";

include("includes/graphs/generic_simplex.inc.php");

?>
