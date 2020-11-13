<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
	</div>
</div>
	<footer>
		<div class="wrapper">
			<div class="footer_down">
				<div class="foter__iner">
					<div class="footer__left">
						
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/includes/copy.php"
							)
						);?>
					</div>
					<div class="footer__right">
						<div class="footer__iner_right">
							<p>Разработка сайта -</p>
							<a href="http://ariginal.net" target="_blank">Ariginal.net</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</body>
</html>