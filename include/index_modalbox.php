<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h2 class="pickColorLB popup-title">Pick a color for this conversation</h2>
				<div class="visibilityLB">Everyone in this conversation will see this.</div>
<table width="100%">
				<?php
					$arr_color = array('#0084ff', '#44bec7', '#ffc300', '#fa3c4c', '#d696bb',
									   '#6699cc', '#13cf13', '#ff7e29', '#e68585', '#7646ff',
									   '#20cef5', '#67b868', '#d4a88c', '#ff5ca1', '#a695c7');
					for ($r = 0; $r < 3; $r++) {
						echo '<tr>';
						for ($c = 0; $c < 5; $c++) {
							echo '<td class="dot" id="color'.substr("0".(5 * $r + $c + 1),-2).'" style="background-color: '.$arr_color[5 * $r + $c].'"><i class="_gs2 img sp_tRueZ17UPsM sx_4affb5" alt=""></i></td>';
						}
						echo '</tr>';
					}
				?>
				</table>
			</div>
			<div class="modal-footer">
				<center class="unread-time"><a class="wide-link" role="button" data-dismiss="modal">Huỷ</a></center>
			</div>
		</div>
	</div>
</div>