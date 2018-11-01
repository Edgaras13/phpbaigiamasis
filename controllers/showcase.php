<?php

$page['title'] = 'Showcase';
$page['show_footer'] = false;
$page['show_header'] = true;

$page['content']['title'] = 'My showcase';
$page['content']['subtitle'] = 'WOW!';

$page['content']['deck'] = [
    'hearts' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'D', 'K'],
    'spades' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'D', 'K'],
    'clubs' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'D', 'K'],
    'diamonds' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'D', 'K']
];
$page['content']['player_hand'] = [];
$page['content']['dealer_hand'] = [];
$page['content']['player_score'] = 0;
$page['content']['dealer_score'] = 0;
$page['content']['result'] = '';

function start() {
    if (isset($_POST['start'])) {
        if ($_POST['start'] == 'start') {
            $start = true;
        } else {
            $start = false;
        }
    } else {
        $start = false;
    }
    return $start;
}

$suits = array_keys($page['content']['deck']);
for ($i = 0; $i < 4; $i++) {
    $rand_suit = $suits[rand(0, 3)];
    $rand_face = rand(0, count($page['content']['deck'][$rand_suit]) - 1);
    $rand_card = $page['content']['deck'][$rand_suit][$rand_face];
    if ($i <= 1) {
        $page['content']['player_hand'][] = $rand_card . ' of ' . $rand_suit;
        array_splice($page['content']['deck'][$rand_suit],$rand_face,1);
        if ($rand_card == 'J' || $rand_card == 'D' || $rand_card == 'K') {
            $page['content']['player_score'] += 10;
        } elseif ($rand_card == 'A') {
            $page['content']['player_score'] += 11;
        } else {
            $page['content']['player_score'] += $rand_card;
        }
        $page['content']['player_class'][$i] = $rand_suit . $rand_card;
    } else {
        $page['content']['dealer_hand'][] = $rand_card . ' of ' . $rand_suit;
        array_splice($page['content']['deck'][$rand_suit],$rand_face,1);
        if ($rand_card == 'J' || $rand_card == 'D' || $rand_card == 'K') {
            $page['content']['dealer_score'] += 10;
        } elseif ($rand_card == 'A') {
            $page['content']['dealer_score'] += 11;
        } else {
            $page['content']['dealer_score'] += $rand_card;
        }
        $page['content']['dealer_class'][$i - 2] = $rand_suit . $rand_card;
    }
}

if ($page['content']['player_score'] > $page['content']['dealer_score'] && $page['content']['player_score'] == 21) {
    $page['content']['result'] = 'Blackjack! Player wins!';
} elseif ($page['content']['player_score'] > $page['content']['dealer_score'] && $page['content']['player_score'] != 21) {
    $page['content']['result'] = 'Player wins!';
} elseif ($page['content']['player_score'] < $page['content']['dealer_score'] && $page['content']['dealer_score'] == 21) {
    $page['content']['result'] = 'Blackjack! Dealer wins!';
} elseif ($page['content']['player_score'] < $page['content']['dealer_score'] && $page['content']['dealer_score'] != 21) {
    $page['content']['result'] = 'Dealer wins!';
} else {
    $page['content']['result'] = 'Equal scores! Push!';
}


$page['content']['rendered'] = render_page($page, 'page-showcase');
