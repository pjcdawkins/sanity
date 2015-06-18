<?php

/**
 * Define sanity checks.
 *
 * Sanity checks can define a query with query parameters and a processing
 * callback, or a results callback with parameters to be passed to it.
 */
function hook_sanity() {
  $items = [];

  $items['example_sanity_query'] = [
    'query' => "SELECT * FROM {watchdog} WHERE severity >= :sev;",
    'params' => [':sev' => WATCHDOG_ALERT],
    'fetch_cb' => 'example_sanity_process_watchdog',
  ];

  $items['example_sanity_callback'] = [
    'results_cb' => 'example_sanity_results_callback',
    'params' => ['Test message'],
  ];

  return $items;
}



