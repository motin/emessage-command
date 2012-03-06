<?php
/**
 * Helper class for Command Line
 * 
 * @package	system.cli.commands
 * @author	Olivier Maury <Olivier.Maury@grignon.inra.fr>
 * @copyright	2010 INRA
 * @license	GPL {@link http://www.gnu.org/copyleft/gpl.html}
 * @since	20100108
 * @version	20100108
 */

/**
 * Helper class for Command Line
 * 
 * @package	system.cli.commands
 * @author	Olivier Maury <Olivier.Maury@grignon.inra.fr>
 * @copyright	2010 INRA
 * @license	GPL {@link http://www.gnu.org/copyleft/gpl.html}
 * @since	20100108
 * @version	20100108
 */
class CLI {

	/**
	 * Uses ANSI Color Code Sequences to colorize messages
	 * 
	 * sent to the console.
	 * simplified from ansicolorLogger from Phing
	 * 
	 * @license	LGPL {@link http://www.gnu.org/licenses/lgpl.html}
	 * @param	string	$message
	 * @param	int	$colorpriority or color code
	 */
	public static function ansicolor($message, $color=null) {
		$ATTR_NORMAL = 0;
		$ATTR_BRIGHT = 1;
		$ATTR_DIM = 2;
		/*
		$ATTR_UNDERLINE = 3;
		$ATTR_BLINK = 5;
		$ATTR_REVERSE = 7;
		$ATTR_HIDDEN = 8;
	
		$FG_BLACK = 30;
		 */
		$FG_RED = 31;
		$FG_GREEN = 32;
		$FG_YELLOW = 33;
		$FG_BLUE = 34;
		$FG_MAGENTA = 35;
		$FG_CYAN = 36;
		$FG_WHITE = 37;

		/*
		$BG_BLACK = 40;
		$BG_RED = 41;
		$BG_GREEN = 42;
		$BG_YELLOW = 44;
		$BG_BLUE = 44;
		$BG_MAGENTA = 45;
		$BG_CYAN = 46;
		$BG_WHITE = 47;
		 */

		$PREFIX = "\x1b[";
		$SUFFIX = "m";
		$SEPARATOR = ';';
		$END_COLOR = "\x1b[m";

		/*
		$MSG_ERR = 1;
		$MSG_WARN = 2;
		 */
		$MSG_INFO = 3;
		/*
		$MSG_VERBOSE = 4;
		$MSG_DEBUG = 5;
		 */
		if ($color === null) {
			$color = $MSG_INFO;
		}

		switch ($color) {
		case 'MSG_ERR':
		case 'RED':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_RED . $SUFFIX;
			break;
		case 'MSG_WARN':
		case 'MAGENTA':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_MAGENTA . $SUFFIX;
			break;
		case 'MSG_INFO':
		case 'CYAN':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_CYAN . $SUFFIX;
			break;
		case 'MSG_VERBOSE':
		case 'GREEN':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_GREEN . $SUFFIX;
			break;
		case 'MSG_DEBUG':
		case 'BLUE':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_BLUE . $SUFFIX;
			break;
		case 'WHITE':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_WHITE . $SUFFIX;
			break;
		case 'YELLOW':
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $FG_YELLOW . $SUFFIX;
			break;
		default:
			echo $color . PHP_EOL;
			$color = $PREFIX . $ATTR_DIM . $SEPARATOR . $color . $SUFFIX;
			break;
		}
		return $color . $message . $END_COLOR;
	}

	/**
	 * @version	20100108
	 * @param	int	numberof dash
	 * @return	string	horizontalline of $pad length
	 */
	public static function hline($pad) {
		return str_repeat('-', $pad) . PHP_EOL;
	}
}
