
	(function()
	{
			function JavaScriptLoader(src, callback)
			{
				var sc = document.createElement("script");
				sc.async = true;
				sc.type = "text/javascript";
				if(window.ActiveXObject)
				{
					sc.onreadystatechange = function()
					{
						if(sc.readyState == "complete") callback(sc.readyState);
						if(sc.readyState == "loaded") callback(sc.readyState);
					};
				}
				else
				{
					sc.onload = function()
					{
						callback("onload");
					};
				}
				sc.src = src;
				document.body.appendChild(sc);
			}

			JavaScriptLoader("//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", function()
			{
				$jq_dhx5x9oa7ays = jQuery.noConflict(true);

				$jq_dhx5x9oa7ays("#ah5bsmhmvgle").before("<div id=\"dhx5x9oa7ays\"></div>");
				$jq_dhx5x9oa7ays("#dhx5x9oa7ays").html("<script type=\"text/javascript\">$(function(){$('.scbox').html('');$('.ad_itemname').html('NX仮想広告A2　※PC');$('.ad_link').attr('href','https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt');$('.ad_image').html('https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg');$('.ad_storeurl').html('');$('.ad_itemname_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\">NX仮想広告A2　※PC</a>');$('.ad_ico').html('<img src=\"https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg\">');$('.ad_ico_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\"><img src=\"https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg\"></a>');$('.ad_storeurl_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\"></a>');$('.adIconImg').attr('src','https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg');$('.ad_link').attr('rel','noreferrer');$('button').attr('rel','noreferrer');$('p.redirect').text('https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt');var rSource = $(\"<div>\").html('');var rResult = $(\"[class^='ad_change']\").each(function(){var ad_change = $(this).attr('class');$(this).html(rSource.find('.'+ad_change).html());});$('.scbox1').html('');$('.ad1_itemname').html('NX仮想広告A2　※PC');$('.ad1_itemname_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\">NX仮想広告A2　※PC</a>');$('.ad_link1').attr('href','https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt');$('.ad1_ico').html('<img src=\"https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg\">');$('.ad1_ico_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\"><img src=\"https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg\"></a>');$('.ad1_storeurl').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\"></a>');$('.ad1_storeurl_link').html('<a href=\"https://ad-nex.com/link.php?i=ahwosogxhj27&type=imp&coid=cfs2oat6x6rt\" rel=\"noreferrer\"></a>');$('.adIconImg1').attr('src','https://img-ad-nex.com/file/item_template/ihtqqrimu1cw/1b531bfac8449b0d80ff314b9d9d5de7.jpg');$('.ad_link1').attr('rel','noreferrer');});</script>");
			});
	})();
