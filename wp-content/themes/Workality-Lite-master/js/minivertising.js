

function sns_share(media, title, url)
{
	if (media == "facebook")
	{
		var goUrl = "http://www.facebook.com/sharer.php?u=" + encodeURIComponent(url) + "&t=" + encodeURIComponent(title);
		var win = window.open(goUrl, "viewTrace", "resizable=yes, width=660, height=310,status=no,toolbar=no,location=no,scrollbars=no,menubar=no,titlebar=no");
	}
}