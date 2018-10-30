<?php if(is_array($this->get('kursTime'))) : foreach($this->get('kursTime') as $key => $value) { 
				//if($value['odwolany'] != 1) {
					echo '<option value="'.$value['idkurs'].'">'.$value['name'].'&nbsp;&nbsp;->&nbsp;&nbsp;'.$value['name1'].'&nbsp;&nbsp;&nbsp;&nbsp;'.$value['time'].'</option>';
				//}
			} endif; ?>