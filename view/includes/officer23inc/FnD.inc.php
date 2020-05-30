<?php


class FND{

	public function in_main()

	public function insert_headline($headline,$subline){
		$division =	<<<EOD
						<div class="headdiv">
							<div class="headline">
								<h1>{$headline}</h1>
							</div>

							<div class="subline">
								<h3>{$subline}</h3>
							</div>
						</div>
					EOD;
		return $division;
	}










	public function insert_textin($label,$name,$id,$value,$required){
		
		if($required==1){
			$reqspan=<<<RSPAN
						<span class="reqspan" >*</span>
					RSPAN;
			$tipspan=<<<TSPAN
						<span class="tooltiptext">Required Field, Can not be empty</span>
					TSPAN;
		}else{
			$reqspan="";
			$tipspan="";
		}


		$division = <<<EOD

						<td class="ldiv" >
					        {$label}{$reqspan}						        
					    </td >

						<td class="indiv" >
							<input type="text" name="{$name}" id="{$id}" value="{$value}" />
							{$tipspan}
						</td<span class="tooltiptext">Required Field, cannot be empty</span>>

					EOD;
		return $division;
	}



<div class="qdiv" >
	<div class="ldiv" >
		<label class="qlabel" >
        	<span class="reqspan" ></span>
        </label>
    </div >

    <div class="indiv">
          <textarea cols="40" rows="6" name= id= value= ></textarea>
    </div>
</div>



}

?>