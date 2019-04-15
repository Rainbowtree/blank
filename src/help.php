<?php

namespace JC\FirstPackage

class Helper
{
	public static function price($price, $digit = 2)
        {
            return round($price, $digit)
        }
}
