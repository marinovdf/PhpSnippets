<?
/**
 * Generated random sting
 *
 * @param int $max max character
 *
 * @return null|string
 */
function genRandom($max = 6) {
    $chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
    $size  = StrLen($chars) - 1;

    $rand = null;

    while ($max--)
        $rand .= $chars[rand(0, $size)];

    return $rand;
}