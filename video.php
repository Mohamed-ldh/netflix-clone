<html>
<head>
	<style>
		video-id{
			margin-top: 0px;
		}
	</style>
</head>
<body>

<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
<video id="video-id" autoplay="false"><source src="Assets\sspiderman trailer.mp4" type="video/mp4" />
<script>
    var myFP = fluidPlayer(
        'video-id',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true
		},
		"htmlOnPauseBlock": {
			"html": null,
			"height": "",
			"width": null
		},
		"autoPlay": true,
		"mute": true,
		"allowTheatre": false,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": false,
		"playButtonShowing": true,
		"fillToContainer": false,
		"posterImage": ""
	},
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
})

</script>
</script>
</body>
</html>