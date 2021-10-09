<?
	/*
	* author: Rafael Clares
	* www.clares.wordpress.com
	*/
	Class Feed
	{
		public $url;
		public $maxFeed = 5;
		public $out = '';
		public $xml = '';
		public $link = '';
		public $count = 1;
		
		public function Url($url)
		{
			$this->url = $url;
		}
		
		public function MaxFeed($num)
		{
			$this->maxFeed = $num;
		}
		
		public function open()
		{
			$fp = fopen($this->url, 'r');
			while (!feof($fp)) 
			{
				$this->xml .= fread($fp, 128);
			}
			fclose($fp);		
		}
		
		public function untag($string, $tag)
		{
			$tmpval = array();
			$preg = "|<$tag>(.*?)</$tag>|s";
			preg_match_all($preg, $string, $tags);
			foreach ($tags[1] as $tmpcont)
			{
				$tmpval[] = $tmpcont;
			}
			return $tmpval;		
		}
		
		public function show()
		{
			$this->open();
			$items = $this->untag($this->xml, 'item');
			
			foreach ($items as $item) {
				if ($this->count <= $this->maxFeed)
				{
					$title = $this->untag($item, 'title');
					$links = $this->untag($item, 'link');
					$data  = $this->untag($item, 'pubDate');
					$resumo= $this->untag($item, 'description');

					$this->link = trim(preg_replace('/\<!\[CDATA\[/',' ',$links[0]));
					$this->link = trim(preg_replace('/\]\]/','',$this->link));
					$this->link = trim(preg_replace('/\>/','',$this->link));
					
					$this->out .= "<p>".$data[0]."</p>\n";
					$this->out .= "<p><a href=\"".$this->link ."\" target=\"_blank\">".utf8_decode($title[0])."</a> </p>\n";
					$this->out .= "<p><i>".utf8_decode($resumo[0])."</i></p><br>\n";
					
					$this->count++;
				}	
			}
			print $this->out;
		}
	}
?>