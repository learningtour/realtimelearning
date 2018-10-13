<?php
require_once("realtime.php");

// add a item to the doc
ltrt_item("Click the OK button (from PHP)");

// request a screenshot (from LearnignTour Toolkit)
ltrt_screenshot();

echo "Ready!";
