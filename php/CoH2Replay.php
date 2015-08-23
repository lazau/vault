<?php

include 'CoH2Player.php';
include 'CoH2ReplayStream.php';

class CoH2Replay {
	
	private $stream; 			// CoH2ReplayStream - access to file
	private $version;			// version number
	private $gametype;			// type of game (default COH__REC)
	private $winCondition;		// set win condition (automatch gives VPTICKERWIN-ANNIHILATE)
	private $datetime;			// time of recording
	private $modname;			// name of game version (default RelicCoH2Dev)
	private $mapFile;			// path to map file
	private $mapName;			// identifier for map name
	private $mapDescription;	// identifier for map description
	private $mapWidth;			// width of map
	private $mapHeight;			// height of map
	private $season;			// empty = sprint, "winter" = winter
	private $duration;			// duration of replay in ticks (8 ticks in a second)
	private $player;			// array of CoH2Players
	
	public function __construct($file) {
		$this->stream = new CoH2ReplayStream($file);
		$this->version = 0;
		$this->gametype = null;
		$this->winCondition = null;
		$this->datetime = null;
		$this->modname = null;
		$this->mapFile = null;
		$this->mapName = null;
		$this->mapDescription = null;
		$this->mapWidth = 0;
		$this->mapHeight = 0;
		$this->season = null;
		$this->duration = 0;
		$this->player = array();
	}
	
	// get/set
	
	// no set for filestream
	public function getStream() 						{ return $this->stream; }
	
	public function getVersion() 						{ return $this->version; }
	public function setVersion($version) 				{ $this->version = $version; }
	
	public function getGametype() 						{ return $this->gametype; }
	public function setGametype($gametype) 				{ $this->gametype = $gametype; }
	
	public function getWinCondition() 					{ return $this->winCondition; }
	public function setWinCondition($winCondition) 		{ $this->winCondition = $winCondition; }
	
	public function getDateTime() 						{ return $this->datetime; }
	public function setDateTime($datetime) 				{ $this->datetime = $datetime; }
	
	public function getModName() 						{ return $this->modname; }
	public function setModName($modname) 				{ $this->modname = $modname; }
	
	public function getMapFile() 						{ return $this->mapFile; }
	public function setMapFile($mapFile) 				{ $this->mapFile = $mapFile; }
		
	public function getMapName() 						{ return $this->mapName; }
	public function setMapName($mapName) 				{ $this->mapName = $mapName; }
	
	public function getMapDescription() 				{ return $this->mapDescription; }
	public function setMapDescription($mapDescription) 	{ $this->mapDescription = $mapDescription; }
	
	public function getMapWidth() 						{ return $this->mapWidth; }
	public function setMapWidth($mapWidth) 				{ $this->mapWidth = $mapWidth; }
	
	public function getMapHeight() 						{ return $this->mapHeight; }
	public function setMapHeight($mapHeight) 			{ $this->mapHeight = $mapHeight; }
	
	public function getSeason() 						{ return $this->season; }
	public function setSeason($season) 					{ $this->season = $season; }
	
	public function getDuration() 						{ return $this->duration; }
	public function setDuration($duration) 				{ $this->duration = $duration; }
	public function incrementDuration()					{ $this->duration = $this->duration + 1; }
	
	public function getPlayers() 						{ return $this->player; }
	public function getPlayer($index)					{ return $this->player[$index]; }
	public function setPlayers(array $players) 			{ $this->player = $players; }
	public function addPlayer(CoH2Player $player)		{ array_push($this->player, $player); }
}