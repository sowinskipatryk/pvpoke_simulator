<?php

$META_TITLE = 'AI Battle Simulation';

$META_DESCRIPTION = 'Watch two AI players battle against each other.';


require_once '../header.php';
?>
<h1>AI Battle Simulation</h1>
<div class="section home white">
	<p>Choose two teams of Pokemon and the skill level of AI players to battle each other in a real-time simulation.</p>
	<p>It is a tool created for educational and entertainment purposes. The Observer has more information than during in-game battles because Pokemon IV, CP, health, etc. are visible at all times. This way you can see advanced strategies in use and learn how to use them correctly in your matches.</p>
</div>

<div class="hide">
	<?php require '../modules/pokeselect.php'; ?>
</div>

<div class="section poke-select-container train">
	<div class="poke">
		<h3>CPU 1</h3>
		<?php require '../modules/pokemultiselect.php'; ?>
		<a class="random" href="#" data-player-id="0">Random</a>
	</div>

	<div class="poke">
		<h3>CPU 2</h3>
		<?php require '../modules/pokemultiselect.php'; ?>
		<a class="random" href="#" data-player-id="1">Random</a>
	</div>

	<div class="poke ai-options">
		<h3>Settings</h3>
		<div class="poke-stats">
			<select class="mode-select">
				<option value="single">Single (3v3)</option>
				<option value="tournament" disabled>Tournament (6v6)</option>
			</select>
			<h3 class="section-title">League &amp; Cup</h3>
			<select class="league-cup-select">
				<option value="" disabled>Select a league</option>
				<option value="1500 gobattleleague" selected>GO Battle League (Great)</option>
				<option value="2500 gobattleleague">GO Battle League (Ultra)</option>
				<option value="10000 gobattleleague">GO Battle League (Master)</option>
				<option value="1500 retro">Retro Cup</option>
				<option value="1500 all">Great League</option>
				<option value="2500 all">Ultra League</option>
				<option value="10000 all">Master League</option>
			</select>
			<h3 class="section-title">Skill Level CPU 1</h3>
			<select class="difficulty-select1">
				<option value="0">Novice</option>
				<option value="1">Rival</option>
				<option value="2">Elite</option>
				<option value="3" selected>Champion</option>
			</select>
			<h3 class="section-title">Skill Level CPU 2</h3>
			<select class="difficulty-select2">
				<option value="0">Novice</option>
				<option value="1">Rival</option>
				<option value="2">Elite</option>
				<option value="3" selected>Champion</option>
			</select>
			<h3 class="section-title" style="display:none;">Switch Timer</h3>
			<select class="switch-time-select"  style="display:none;">
				<option value="30000">30s</option>
				<option value="60000" selected>60s</option>
			</select>
			</div>
	</div>
</div>

<div class="section">
	<button class="battle-btn button">
		<span class="btn-content-wrap">
			<span class="btn-icon btn-icon-train"></span>
			<span class="btn-label">Run simulation</span>
		</span>
	</button>
</div>

<div class="section team-select">
	<a class="return-to-setup" href="#">&larr; Team Select &amp; Setup</a>
	<div class="opponent">
		<h3 class="center">Opponent's Roster</h3>
		<div class="featured-team-description">
			<a target="_blank" href="#">
				<img>
				<h3></h3>
			</a>
		</div>
		<div class="roster pokemon-container"></div>
	</div>
	<h3 class="center">vs.</h3>
	<div class="self">
		<h3 class="center">Your Roster</h3>
		<div class="roster pokemon-container"></div>
		<p class="center">Select and order your team of 3 for battle!</p>
		<h4 class="center">Current Round: <span class="round-record"></span></h4>
	</div>
	<button class="lets-go-btn button">Let's Go!</button>
</div>

<div class="section battle">
	<div class="battle-window">
		<img class="img-block" src="<?php echo $WEB_ROOT; ?>img/train/battle-window-block.png" />
		<?php require_once 'modules/top.php'; ?>
		<?php require_once 'modules/scene.php'; ?>
		<?php require_once 'modules/controls.php'; ?>

		<div class="countdown">
			<div class="text"></div>
		</div>

		<?php require_once '../train/modules/end-screen.php'; ?>
	</div>
</div>

<?php require '../modules/ads/body-728.php'; ?>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Player.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/simulation/SimulationSetupInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/simulation/BattleInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/DecisionOption.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingAI.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Pokebox.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineAction.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TeamRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/simulation/MatchHandler.js?v=<?php echo $SITE_VERSION; ?>"></script>

<script>
  // Hide swap button
  $("a.swap").hide();
</script>

<?php require_once '../footer.php'; ?>
