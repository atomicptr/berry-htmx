<?php

namespace Berry\Html5;

use Berry\Htmx\HxSwap;
use Berry\Htmx\HxTarget;

/**
 * @method static hxGet(string $url) Issues a GET request to the specified URL
 * @method static hxPost(string $url) Issues a POST request to the specified URL
 * @method static hxPut(string $url) Issues a PUT request to the specified URL
 * @method static hxPatch(string $url) Issues a PATCH request to the specified URL
 * @method static hxDelete(string $url) Issues a DELETE request to the specified URL
 * @method static hxBoost(bool $value) Enables progressive enhancement
 * @method static hxConfirm(string $message) Shows a confirm() dialog before issuing requests
 * @method static hxDisable() Disables HTMX processing on this element and its children
 * @method static hxEncoding(string $type) Changes encoding to multipart/form-data ("multipart/form-data")
 * @method static hxExt(string $extensions) Extensions to include (comma-separated)
 * @method static hxHistory(bool $history) Prevents history snapshot for this element
 * @method static hxInclude(string $selector) Additional elements to include in requests
 * @method static hxIndicator(string $selector) CSS selector for indicator element
 * @method static hxParams(string $filter) Filters parameters sent with requests
 * @method static hxPreserve() Preserves element across swaps
 * @method static hxPrompt(string $message) Shows a prompt() before issuing requests
 * @method static hxPushUrl(string|bool $url) Pushes URL into history ("true" for current, "false" to disable)
 * @method static hxReplaceUrl(string|bool $url) Replaces current URL without push
 * @method static hxRequest(string $config) Configures requests (JSON string)
 * @method static hxSelect(string $selector) Selects content from response to swap
 * @method static hxSelectOob(string $values) Out-of-band swaps (comma-separated)
 * @method static hxSwapOob(string|bool $swap) Marks element for out-of-band swap
 * @method static hxSync(string $strategy) Synchronizes requests on this element
 * @method static hxTarget(HxTarget|string $target) Target element for response
 * @method static hxTrigger(string $spec) Specifies trigger events
 * @method static hxValidate(bool $true) Validates before request ("true")
 * @method static hxVals(string $json) Adds extra values to requests (JSON)
 * @method static hxHeaders(string $json) Adds extra headers (JSON)
 * @method static hxSwap(HxSwap|string $strategy) Swap strategy for response
 * @method static hxDisinherit(string $attrs) Prevents inheriting specified attributes
 * @method static hxInherit(string $attrs) Forces inheritance of specified attributes
 * @method static hxHistoryElt() Marks element as the one saved to history
 * @method static hxDisabledElt(string $selector) Adds the disabled attribute to the specified elements while a request is in flight
 * @method static hxOn(string $event, string $js) Handles any event with inline script (uses hx-on:* syntax)
 */
class HtmlVoidTag {}
