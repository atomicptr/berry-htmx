<?php declare(strict_types=1);

use Berry\Htmx\BerryHtmx;

use function Berry\Html5\button;
use function Berry\Html5\div;
use function Berry\Html5\form;
use function Berry\Html5\input;

beforeAll(function () {
    BerryHtmx::install();
});

test('request methods', function () {
    expect(button()->hxGet('/get')->toString())
        ->toBe('<button hx-get="/get"></button>');
    expect(button()->hxPost('/post')->toString())
        ->toBe('<button hx-post="/post"></button>');
    expect(button()->hxPut('/put')->toString())
        ->toBe('<button hx-put="/put"></button>');
    expect(button()->hxPatch('/patch')->toString())
        ->toBe('<button hx-patch="/patch"></button>');
    expect(button()->hxDelete('/delete')->toString())
        ->toBe('<button hx-delete="/delete"></button>');
});

test('hx-on', function () {
    expect(div()->hxOn('click', 'alert("hi")')->toString())
        ->toBe('<div hx-on:click="alert(&quot;hi&quot;)"></div>');
});

test('hx-boost handles booleans', function () {
    expect(div()->hxBoost(true)->toString())->toBe('<div hx-boost="true"></div>');
    expect(div()->hxBoost(false)->toString())->toBe('<div hx-boost="false"></div>');
});

test('hx-push-url handles string and true/false strings', function () {
    expect(div()->hxPushUrl('/new-url')->toString())->toBe('<div hx-push-url="/new-url"></div>');
    expect(div()->hxPushUrl('true')->toString())->toBe('<div hx-push-url="true"></div>');
});

test('hx-select targets specific elements', function () {
    expect(div()->hxSelect('#specific-div')->toString())->toBe('<div hx-select="#specific-div"></div>');
});

test('hx-target supports strings and Enums', function () {
    expect(div()->hxTarget('#id')->toString())->toBe('<div hx-target="#id"></div>');
});

test('hx-swap supports strings and Enums', function () {
    expect(div()->hxSwap('outerHTML')->toString())->toBe('<div hx-swap="outerHTML"></div>');
});

test('hx-trigger sets event triggers', function () {
    expect(input()->hxTrigger('keyup changed delay:500ms')->toString())
        ->toBe('<input hx-trigger="keyup changed delay:500ms" />');
});

test('hx-vals and hx-headers handle JSON strings', function () {
    $json = '{"myVal":"value"}';
    expect(div()->hxVals($json)->toString())->toBe('<div hx-vals="' . htmlspecialchars($json) . '"></div>');
    expect(div()->hxHeaders($json)->toString())->toBe('<div hx-headers="' . htmlspecialchars($json) . '"></div>');
});

test('hx-params limits request parameters', function () {
    expect(form()->hxParams('*')->toString())->toBe('<form hx-params="*"></form>');
});

test('hx-sync coordinates multiple elements', function () {
    expect(button()->hxSync('#other-form:drop')->toString())->toBe('<button hx-sync="#other-form:drop"></button>');
});

test('hx-indicator defines loading states', function () {
    expect(button()->hxIndicator('#spinner')->toString())->toBe('<button hx-indicator="#spinner"></button>');
});

test('hx-confirm shows a browser dialog', function () {
    expect(button()->hxConfirm('Are you sure?')->toString())->toBe('<button hx-confirm="Are you sure?"></button>');
});

test('hx-prompt shows a prompt dialog', function () {
    expect(button()->hxPrompt('Enter name')->toString())->toBe('<button hx-prompt="Enter name"></button>');
});

test('hx-disabled-elt disables elements during request', function () {
    expect(button()->hxDisabledElt('this')->toString())->toBe('<button hx-disabled-elt="this"></button>');
});

test('hx-disable is a boolean flag (no value)', function () {
    expect(div()->hxDisable()->toString())->toBe('<div hx-disable></div>');
});

test('hx-history-elt is a boolean flag', function () {
    expect(div()->hxHistoryElt()->toString())->toBe('<div hx-history-elt></div>');
});

test('hx-validate handles boolean values', function () {
    expect(input()->hxValidate(true)->toString())->toBe('<input hx-validate="true" />');
});

test('hx-history handles boolean values', function () {
    expect(div()->hxHistory(false)->toString())->toBe('<div hx-history="false"></div>');
});

test('hx-ext loads extensions', function () {
    expect(div()->hxExt('json-enc')->toString())->toBe('<div hx-ext="json-enc"></div>');
});

test('hx-inherit and hx-disinherit control attribute bubbling', function () {
    expect(div()->hxInherit('hx-target')->toString())->toBe('<div hx-inherit="hx-target"></div>');
    expect(div()->hxDisinherit('*')->toString())->toBe('<div hx-disinherit="*"></div>');
});

test('hx-swap-oob and hx-select-oob', function () {
    expect(div()->hxSwapOob('true')->toString())->toBe('<div hx-swap-oob="true"></div>');
    expect(div()->hxSelectOob('#id')->toString())->toBe('<div hx-select-oob="#id"></div>');
});
