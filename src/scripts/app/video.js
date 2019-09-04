/*

var defaultVideoSettings = {
	id: 'nonscoop_video',
	width: '100%',
	height: '100%',
	debug: true,
	type: 'times-center',
	controls: true,
	ads: false,
	api: false,
	is360: true,
	// is360: false,
	cover: { mode: 'article' },
	posterUrl: '/assets/img/video-cover/the-stage.jpg',
}
function loadStageVideo() {
	var config = $.extend(
		defaultVideoSettings,
		{
			container: 'video-container--stage',
			headline: 'TheTimesCenter Stage 360 Video',
			posterUrl: '/assets/img/video-cover/the-stage.jpg',
			src: '/assets/video/times-center-360-stage.mp4'
		},
		queryStringToJSON()
	);
	var stagePlayer = VHS(config);
	stagePlayer.on(stagePlayer.events.READY, function() {
		stagePlayer.on(stagePlayer.events.PLAYING, function() {
		  console.log('playing');
		});

	  });
}
function loadHallVideo() {
	var config = $.extend(
		defaultVideoSettings,
		{
			container: 'video-container--hall',
			headline: 'TheTimesCenter Hall 360 Video',
			posterUrl: '/assets/img/video-cover/the-hall.jpg',
			src: '/assets/video/times-center-360-hall.mp4'
		},
		queryStringToJSON()
	);
	var hallPlayer = VHS(config);
}
function loadScreeningRoomVideo() {
	var config = $.extend(
		defaultVideoSettings,
		{
			container: 'video-container--screening-room',
			headline: 'TheTimesCenter Screening Room 360 Video',
			posterUrl: '/assets/img/video-cover/the-screening-room.jpg',
			src: '/assets/video/times-center-360-screening-room.mp4'
		},
		queryStringToJSON()
	);
	var screeningPlayer = VHS(config);
}
function loadLobbyVideo() {
	var config = $.extend(
		defaultVideoSettings,
		{
			container: 'video-container--lobby',
			headline: 'TheTimesCenter Lobby 360 Video',
			posterUrl: '/assets/img/video-cover/the-lobby.jpg',
			src: '/assets/video/times-center-360-lobby.mp4'
		},
		queryStringToJSON()
	);
	var lobbyPlayer = VHS(config);
}
function loadMasterVideo() {
	var config = $.extend(
		defaultVideoSettings,
		{
			container: 'video-container--master',
			headline: 'TheTimesCenter 360 Video',
			posterUrl: '/assets/img/video-cover/the-lobby.jpg',
			src: '/assets/video/times-center-360-master.mp4'
		},
		queryStringToJSON()
	);
	var masterPlayer = VHS(config);
}
function initializeVideos() {
	// loadStageVideo();
	// loadHallVideo();
	// loadScreeningRoomVideo();
	// loadLobbyVideo();
}

*/
