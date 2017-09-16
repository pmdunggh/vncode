<?php
namespace VanXuan;
/**
 * Last edit: 2017-09-17
 * Su dung cho cac chuc nang lien quan den tieng Viet
 * DON'T EDIT BY EDITOR WHICH DON'T SUPPORT ANSI ENCODING
 */

class VNCode {
	public static $UNI = array(//Unicode precomposed - unicode dung san - tot nhat
'đ','Đ',
     'á', 'à', 'ả', 'ã', 'ạ',
'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ',
'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
     'é', 'è', 'ẻ', 'ẽ', 'ẹ',
'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ',
     'í', 'ì', 'ỉ', 'ĩ', 'ị',
     'ó', 'ò', 'ỏ', 'õ', 'ọ',
'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ',
'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ',
     'ú', 'ù', 'ủ', 'ũ', 'ụ',
'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự', 
     'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ',
     'Á', 'À', 'Ả', 'Ã', 'Ạ',
'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ',
'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ',
     'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ',
'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ',
     'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị',
     'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ',
'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ',
'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ',
     'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ',
'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự',
     'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'
	);
	public static $UNI_C = array(//Unicode composed - Unicode to hop
'đ','Đ',
     'á', 'à', 'ả', 'ã', 'ạ',
'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ',
'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
     'é', 'è', 'ẻ', 'ẽ', 'ẹ',
'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ',
     'í', 'ì', 'ỉ', 'ĩ', 'ị',
     'ó', 'ò', 'ỏ', 'õ', 'ọ',
'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ',
'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ',
     'ú', 'ù', 'ủ', 'ũ', 'ụ',
'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự', 
     'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ',
     'Á', 'À', 'Ả', 'Ã', 'Ạ',
'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ',
'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ',
     'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ',
'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ',
     'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị',
     'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ',
'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ',
'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ',
     'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ',
'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự',
     'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'
	);
	public static $NCR_VN0 = array(
273=>'d', 272=>'D', 225=>'a', 224=>'a', 7843=>'a', 227=>'a', 7841=>'a', 259=>'a', 7855=>'a',
7857=>'a', 7859=>'a', 7861=>'a', 7863=>'a', 226=>'a', 7845=>'a', 7847=>'a', 7849=>'a', 7851=>'a',
7853=>'a', 233=>'e', 232=>'e', 7867=>'e', 7869=>'e', 7865=>'e', 234=>'e', 7871=>'e', 7873=>'e',
7875=>'e', 7877=>'e', 7879=>'e', 237=>'i', 236=>'i', 7881=>'i', 297=>'i', 7883=>'i', 243=>'o',
242=>'o', 7887=>'o', 245=>'o', 7885=>'o', 7899=>'o', 7901=>'o', 7903=>'o', 7905=>'o', 7907=>'o',
417=>'o', 244=>'o', 7889=>'o', 7891=>'o', 7893=>'o', 7895=>'o', 7897=>'o', 250=>'u', 249=>'u',
7911=>'u', 361=>'u', 7909=>'u', 7913=>'u', 7915=>'u', 7917=>'u', 7919=>'u', 7921=>'u', 432=>'u',
253=>'y', 7923=>'y', 7927=>'y', 7929=>'y', 7925=>'y', 193=>'A', 192=>'A', 7842=>'A', 195=>'A',
7840=>'A', 258=>'A', 7854=>'A', 7856=>'A', 7858=>'A', 7860=>'A', 7862=>'A', 194=>'A', 7844=>'A',
7846=>'A', 7848=>'A', 7850=>'A', 7852=>'A', 201=>'E', 200=>'E', 7866=>'E', 7868=>'E', 7864=>'E',
202=>'E', 7870=>'E', 7872=>'E', 7874=>'E', 7876=>'E', 7878=>'E', 205=>'I', 204=>'I', 7880=>'I',
296=>'I', 7882=>'I', 211=>'O', 210=>'O', 7886=>'O', 213=>'O', 7884=>'O', 7898=>'O', 7900=>'O',
7902=>'O', 7904=>'O', 7906=>'O', 416=>'O', 212=>'O', 7888=>'O', 7890=>'O', 7892=>'O', 7894=>'O',
7896=>'O', 218=>'U', 217=>'U', 7910=>'U', 360=>'U', 7908=>'U', 431=>'U', 7912=>'U', 7914=>'U',
7916=>'U', 7918=>'U', 7920=>'U', 221=>'Y', 7922=>'Y', 7926=>'Y', 7928=>'Y', 7924=>'Y');

	/**
	 * @param $str
	 * @param $index
	 * @param $max
	 * @return int
	 * @desc Tra ve phan tu str[index] va tang index len 1
	 */
	public static function _nextCode($str, &$index, $max){
		return $index >= $max ? 0 : ord($str[$index++]);
	}

	/**
	 * @param $str
	 *
	 * @return string
	 * @desc Doi chuoi tu dang UTF-8 sang dang Decimal
	 */
	public static function UTF8NCR($str){
		$result = '';
		$len = strlen($str);
		for($i=0;$i<$len;){
			$code = VNCode::_nextCode($str,$i,$len);
			if (($code & 0xF0) == 0xF0){//11110000, 4 byte
				$b1 = $code & 0x07; //111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b3 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b4 = $code & 0x3F; //111111
				$code = ((((($b1 << 6) | $b2) << 6) | $b3) << 6) | $b4;
				$result .= '&#'.$code.';';
			}elseif (($code & 0xE0) == 0xE0){//1110000, 3 byte
				$b1 = $code & 0x0F; //1111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b3 = $code & 0x3F; //111111
				$code = ((($b1 << 6) | $b2) << 6) | $b3;
				$result .= '&#'.$code.';';
			}elseif (($code & 0xC0) == 0xC0){//1100000, 2 byte
				$b1 = $code & 0x1F; //11111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = ($b1 << 6) | $b2;
				$result .= '&#'.$code.';';
			}else{
				$result .= chr($code);
			}
		}
		return $result;
	}

	public static function UTF8VN0($str){
		$CT = &VNCode::$NCR_VN0;
		$result = '';
		$len = strlen($str);
		for($i=0;$i<$len;){
			$code = VNCode::_nextCode($str,$i,$len);
			if (($code & 0xF0) == 0xF0){//11110000, 4 byte
				$b1 = $code & 0x07; //111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b3 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b4 = $code & 0x3F; //111111
				$code = ((((($b1 << 6) | $b2) << 6) | $b3) << 6) | $b4;
				//if (!isset($CT[$code])) echo "UTF8 code error (1) char $code<br>";
				$result .= isset($CT[$code]) ? $CT[$code] : '-';
			}elseif (($code & 0xE0) == 0xE0){//1110000, 3 byte
				$b1 = $code & 0x0F; //1111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = VNCode::_nextCode($str,$i,$len);
				$b3 = $code & 0x3F; //111111
				$code = ((($b1 << 6) | $b2) << 6) | $b3;
				//if (!isset($CT[$code])) echo "UTF8 code error (2) char $code<br>";
				$result .= isset($CT[$code]) ? $CT[$code] : '-';
			}elseif (($code & 0xC0) == 0xC0){//1100000, 2 byte
				$b1 = $code & 0x1F; //11111
				$code = VNCode::_nextCode($str,$i,$len);
				$b2 = $code & 0x3F; //111111
				$code = ($b1 << 6) | $b2;
				//if (!isset($CT[$code])) echo "UTF8 code error (3) char $code<br>";
				$result .= isset($CT[$code]) ? $CT[$code] : '-';
			}else{
				$result .= chr($code);
			}
		}
		return $result;
	}

	public static function getSEOString($utf8)
	{
		$name = urlencode(VNCode::UTF8VN0($utf8));
		$name = preg_replace('/([\s]+)|(\%[\dABCDEF]+)|\+/','-',$name);
		$name = preg_replace('/\-+/','-',$name);
		$name = preg_replace('/(^\-)|(\-$)/','',$name);
		return $name;
	}
	/**
	 * @param $str
	 *
	 * @return string
	 * @desc Doi chuoi tu dang Decimal sang dang UTF-8
	 */
	public static function NCRUTF8($str){
		$len = strlen($str);
		$result = '';
		for($i=0;$i<$len;$i++){
			$n = '';
			if ($str[$i] == '&'){
				$k = $i+1;
				if ($k < $len && $str[$k] == '#'){
					$k++;
					while ($k < $len && is_numeric($str[$k]))
						$n .= $str[$k++];
					if ($k < $len && $str[$k]==';')
						$i = $k;
				}
			}
			if ($n!=''){
				$n = intval($n);
				$result .= VNCode::toUTF8($n);
			}else
				$result .= $str[$i];
		}
		return $result;
	}

	/**
	 * @desc Chuyen ma tu Unicode composed thanh Unicode precomposed
	 *
	 * @param $s
	 *
	 * @return mixed
	 */
	public static function toUniPrecomposed($s){
		return str_replace(VNCode::$UNI_C,VNCode::$UNI,$s);
	}

	/**
	 * @param $n
	 *
	 * @return string
	 * @desc Tra ve chuoi UTF-8 tuong ung voi $n
	 */
	public static function toUTF8($n){
		$s = '';
		$byte = $first = 0;
		$mask = 0x80;
		while ($n>0){
			$byte = $n & 0x3F; //00111111
			$n = $n >> 6;
			if ($n) $s = chr($byte | 0x80).$s;
			$first = $first | $mask;
			$mask  = $mask >> 1;
		}
		$s = chr($first | $byte).$s;
		return $s;
	}

	/**
	 * @param $data
	 * @param $index
	 *
	 * @return int
	 * @desc Tra ve vi tri that cua chu cai thu index trong chuoi unicode UTF-8
	 */
	public static function indexUTF8($data, $index){
		$len = strlen($data);
		if ($len==0) return 0;
		for($i=0, $j=0;$i<$len && $j<$index;$j++){
			$code = ord($data{$i++});
			if (($code & 0xF0) == 0xF0){//11110000, 4 byte
				$i += 3;
			}elseif (($code & 0xE0) == 0xE0){//1110000, 3 byte
				$i += 2;
			}elseif (($code & 0xC0) == 0xC0){//1100000, 2 byte
				$i += 1;
			}
		}
		return ($i ? $i-1 : 0);
	}

	/**
	 * @param $data
	 *
	 * @return string
	 * @desc Correct a string UTF-8 (error cause by some char is cuted at the end)
	 */
	public static function correctUTF8($data){
		$len = strlen($data);
		if ($len>=3){
			$code = ord($data{$len-3});
			if (($code & 0xF0) == 0xF0) return substr($data,0,$len-3);
			$code = ord($data{$len-2});
			if (($code & 0xE0) == 0xE0) return substr($data,0,$len-2);
			$code = ord($data{$len-1});
			if (($code & 0xC0) == 0xC0) return substr($data,0,$len-1);
		}
		return $data;
	}

	/**
	 * @param $data
	 *
	 * @return string
	 * @desc Correct a string NCR (error cause by some char code >127 and < 255 isnot converted)
	 */
	public static function correctNCR($data){
		for ($i=128;$i<256;$i++)
			$data = str_replace(chr($i),"&#$i;",$data);
		return $data;
	}

	/**
	 * @param     $str
	 * @param int $trunsize
	 *
	 * @return string
	 * @desc Cat mot string ngan lai de vua mot cot nho
	 */
	public static function trunstrword($str, $trunsize=0){
		$size = ($trunsize)? $trunsize : 20;
		if (strlen($str)<=$size) return $str;
		$len = strlen($str);
		for ($r=VNCode::indexUTF8($str,$size); $r<$len && $str[$r]!=' ' && $r<$size+5;$r++);
	
		$s2 = substr($str, 0, $r);
		if (strlen($s2)<strlen($str))
			$s2.='...';
		return $s2;
	}

	/**
	 * @param $data
	 * @param $index
	 *
	 * @return int
	 * @desc Tra ve vi tri that cua chu cai thu index trong chuoi unicode NCR
	 */
	public static function indexNCR($data, $index){
		$p = 0;
		$len = strlen($data);
		for($i=0;$i<$len && $p<$index;$i++){
			$p++;
			if ($data[$i] == '&'){
				$k = $i+1;
				if ($k<$len && $data[$k] == '#'){
					$k++;
					while ($k<$len && is_numeric($data[$k])) $k++;
					if ($k<$len && $data[$k]==';') $i = $k;
				}
			}
		}
		return $i;
	}

	/**
	 * @param $data
	 *
	 * @return int
	 * @desc Tra ve do dai chuoi unicode NCR
	 */
	public static function strlenNCR($data){
		$p = 0;
		$len = strlen($data);
		for($i=0;$i<$len;$i++){
			$p++;
			if ($data[$i] == '&'){
				$k = $i+1;
				if ($k<$len && $data[$k] == '#'){
					$k++;
					while ($k<$len && is_numeric($data[$k])) $k++;
					if ($k<$len && $data[$k]==';') $i = $k;
				}
			}
		}
		return $p;
	}
}
