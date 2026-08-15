// This is the extension of the global variable "klaroConfig".
// The extension consists of optional blocks that can be selected in the ACP of the phpBB3 board.
// The script is started instead of the original script when a user is logged on.
var klaroConfig =
{
    // Start with the settings of the script for the cookie manager with the Klaro script,
    // first the options that cannot be edited in the ACP.

    // With version 0.7.0 we introduce a 'version' parameter,
    // which makes it easier for us to keep configuration files backwards compatible in the future.
    version: 1,

    //Defines the default status for services (true = activated by default).
    // "false" is recommended
    default: false,
	//noch schalter anlegen in acp
	styling: {
		theme: [klarostylecolor, klarostyleposition1, klarostyleposition2],
    },
    // From here the values are set in the ACP.
    mustConsent: windowposition,
    cookieName: nameofcookie,
    elementID: klarodivcontainer,
    storageMethod: storageversion,
    embedded: klarohiddenwindows,
    htmlTexts: htmlcodeprocessing,
    groupByPurpose: groupformation,
    acceptAll: saveallbutton,
    cookieExpiresAfterDays: cookieruntime,
    cookieDomain: cookiedomain,
    hideDeclineAll: showdeclinebutton,
    hideLearnMore: tothecookiesettings,
    noticeAsModal: windowfixinthemiddle,
    disablePoweredBy: klaronote,

    // Please do not change this value. In order to be able to use the language variables used,
    // the language script must be loaded into this file.
    // This language configuration has been edited to be compatible with the phpbb forum.

    lang: 'en',

    translations:
	{

        // If you erase the "consentModal" translations, Klaro will use the
        // bundled translations.
        en:
		{
            contextualConsent:
			{
                description: load_external_content,
                acceptOnce: allow_once,
                acceptAlways: permit_permanently,
            },
            consentNotice:
			{
				description: first_infos,
                changeDescription: new_changes,
                learnMore: the_cookie_settings,
            },
            save: save,
            acceptAll: all_accept,
            acceptSelected: accept_selected,
            close: close,
            decline: decline,
            ok: accept,
            poweredBy: powerd_by,
            service:
			{
                disableAll:
				{
                    description: all_switch,
                    title: all_switch_explain
                },
                optOut:
				{
                    description: optout_info,
                    title: "(Opt-out)"
                },
                purpose: klaro_purpose,
                purposes: klaro_purposes,
                required:
				{
                    description: allways_required_service,
                    title: allways_required
                }
            },
            purposeItem:
			{
                service: klaro_service,
                services: klaro_services
            },
            consentModal:
			{
                title: cookie_icon_selection + settings_for_cookie + new_line,
                description: new_line + second_infos,
            },
            purposes:
			{
                essential:
				{
                    description: cookies_must_have,
                    title: technical_cookies
                },
                media:
				{
                    description: extern_cookies_explain,
                    title: extern_cookies
                },
				extern:
				{
                    description: tools_cookies,
                    title: tools
                },
				another_ext:
				{
                    description: another_ext_explain,
                    title: another_ext
                },
				extra_service:
				{
                    description: extra_services_explain,
                    title: extra_services
                },
            },
        },
    },

    // This is a list of third-party services that Klaro will manage for you.
    services:
	[
		{
			name: 'phpbb',
			default: true,
			optOut: false,
			required: true,
			title: cs_techcookie,
			description: ds_techcookie,
			purposes: ['essential'],
			cookies: ['111'],
		},
		{
			name: 'Klaro',
			default: true,
			optOut: false,
			required: true,
			title: cs_klarocookie,
			description: ds_klarocookie,
			purposes: ['essential'],
			cookies: ['111'],
		},
	],
};
var switch_1 = false;
var switch_2 = false;
var switch_3 = false;
var switch_4 = false;
var switch_5 = false;
var switch_6 = false;
var switch_7 = false;
var switch_8 = false;
var switch_9 = false;
var switch_10 = false;

// YouTube
if (youtube_bbcode_switch == true)
{
    var part1 =
	{
        services:
		{
            name: 'youtube',
            default: false,
            title: cs_youtube,
            purposes: ['media'],
			description: ds_youtube,
			cookies: ['111'],
        },
    };
}
else
{
    part1 = null
};

// Google Translator
if (google_translator_switch == true)
{
    var part2 =
	{
        services:
		{
            name: data_name_googletranslate,
            default: false,
            title: cs_google_translator,
            purposes: ['another_ext'],
			description: ds_google_translator,
            callback: function(consent, app)
			{
                if (typeof hideAllgoogleTranslateElementInit === "function")
				{
                    if (!consent)
					{
                        hideAllgoogleTranslateElementInit();
                    }
					else
					{
                        showAllgoogleTranslateElementInit();
                    }
                }
            },
            required: false,
            optOut: false,
            onlyOnce: true,
        },
    };
}
else
{
    part2 = null
};

if (google_analytics_no_tm_switch == true)
{
    var part3 =
	{
        services:
		{
            name: data_name_googleanalytics,
            default: false,
            title: cs_google_analytics,
            purposes: ['extern'],
			description: ds_google_analytics_no_tm,
            callback: function(consent, service)
			{
                // callback function the google_analytics cookies.
                if (consent == false)
				{
                    var cookieListAll = (document.cookie) ? document.cookie.split(';') : []; //Alle cookies auslesen - Read all Cookies
                    var cookieList = cookieListAll.filter(function(praefix) //Cookies filtern - Filter cookies
                        {
                            return praefix.substring(0, f).match('_ga|_gid'); //Filterwert festlegen - Define the filter value
                        });
                    var cookieValues = {}; //Eigenschaftenvariable für cookie-Werte anlegen - Create property variable for cookie values
                    for (var i = 0, n = cookieList.length; i != n; ++i) //Schleife über Anzahl der gefilterten cookies - Loop over number of filtered cookies
                    {
                        var cookie = cookieList[i]; //cookie in Array schreiben - write cookie in a array
                        var f = cookie.indexOf('='); //Position =
                        if (f >= 0) //wenn Position = größer 0 - If position = bigger then 0
                        {
                            var cookieName = cookie.substring(0, f); //Wert vor dem = in cookieName schreiben - Write the value in front of the = in cookieName
                            var cookieValue = cookie.substring(f + 1); //Wert hinter dem = in cookieValue schreiben - Write the value after the = in cookieValue
                            if (!cookieValues.hasOwnProperty(cookieName))
							{ //Wenn keine Eigenschaft für cookieName gespeichert - If no property is saved for cookieName
                                cookieValues[cookieName] = cookieValue; //cookieValue als Eigenschaft speichern - Save cookieValue as a property
                            }
                        }
                        document.cookie = cookieName + '=' + cookieValue + '; path=/; MaxAge=0; Domain=.' + window.location.hostname; //Max-Age der ermittelten cookies auf 0 setzen - Set the max age of the cookies detected to 0
                    }
                }
            },
            required: false,
            optOut: false,
            onlyOnce: true,
        }
    }
}
else
{
    part3 = null
};

if (vimeo_bbcode_switch == true)
{
    var part4 =
	{
        services:
		{
            name: 'vimeo',
            default: false,
            title: cs_vimeo,
            purposes: ['media'],
			description: ds_vimeo,
        },
    };
}
else
{
    part4 = null
};

if (matomo_switch == true)
{
    var part5 =
	{
        services:
		{
            name: data_name_matomo,
            default: false,
            title: cs_matomo,
            purposes: ['extern'],
			description: ds_matomo,
            callback: function(consent, service)
			{
                // callback function the google_analytics cookies.
                if (consent == false)
				{
                    var cookieListAll = (document.cookie) ? document.cookie.split(';') : []; //Alle cookies auslesen - Read all Cookies
                    var cookieList = cookieListAll.filter(function(praefix) //Cookies filtern - Filter cookies
                        {
                            return praefix.substring(0, f).match('_pk'); //Filterwert festlegen - Define the filter value
                        });
                    var cookieValues = {}; //Eigenschaftenvariable für cookie-Werte anlegen - Create property variable for cookie values
                    for (var i = 0, n = cookieList.length; i != n; ++i) //Schleife über Anzahl der gefilterten cookies - Loop over number of filtered cookies
                    {
                        var cookie = cookieList[i]; //cookie in Array schreiben - write cookie in a array
                        var f = cookie.indexOf('='); //Position =
                        if (f >= 0) //wenn Position = größer 0 - If position = bigger then 0
                        {
                            var cookieName = cookie.substring(0, f); //Wert vor dem = in cookieName schreiben - Write the value in front of the = in cookieName
                            var cookieValue = cookie.substring(f + 1); //Wert hinter dem = in cookieValue schreiben - Write the value after the = in cookieValue
                            if (!cookieValues.hasOwnProperty(cookieName))
							{ //Wenn keine Eigenschaft für cookieName gespeichert - If no property is saved for cookieName
                                cookieValues[cookieName] = cookieValue; //cookieValue als Eigenschaft speichern - Save cookieValue as a property
                            }
                        }
                        document.cookie = cookieName + '=' + cookieValue + '; path=/; MaxAge=0; Domain=.' + window.location.hostname; //Max-Age der ermittelten cookies auf 0 setzen - Set the max age of the cookies detected to 0
                    }
                }
            },
            required: false,
            optOut: false,
            onlyOnce: true,
        }
    }
}
else
{
	part5 = null
};

if (spotify_bbcode_switch == true)
{
    var part6 =
	{
        services:
		{
            name: 'spotify',
            default: false,
            title: cs_spotify,
            purposes: ['media'],
			description: ds_spotify,
        },
    };
}
else
{
    part6 = null
};

if (google_webfont_switch == true)
{
    var part7 =
	{
        services:
		{
            name: data_name_googlewebfont,
            default: false,
            title: cs_google_webfont_switch,
            purposes: ['extra_service'],
			description: ds_google_webfont_switch,
        },
    };
}
else
{
    part7 = null
};

if (google_adsense_switch == true)
{
    var part8 =
	{
        services:
		{
            name: data_name_googleadsense,
            default: false,
            title: cs_google_adsense_switch,
            purposes: ['extra_service'],
			description: ds_google_adsense_switch,
        },
    };
}
else
{
    part8 = null
};

if (google_maps_switch == true)
{
    var part9 =
	{
        services:
		{
            name: data_name_googlemaps,
            default: false,
            title: cs_google_maps_switch,
            purposes: ['extra_service'],
			description: ds_google_maps_switch,
        },
    };
}
else
{
    part9 = null
};

if (amazon_switch == true)
{
    var part10 =
	{
        services:
		{
            name: data_name_amazon,
            default: false,
            title: cs_amazon_switch,
            purposes: ['extra_service'],
			description: ds_amazon_switch,
        },
    };
}
else
{
    part10 = null
};

if (part1 != null)
{
    klaroConfig.services.push(part1.services);
};
if (part2 != null)
{
    klaroConfig.services.push(part2.services);
};
if (part3 != null)
{
    klaroConfig.services.push(part3.services);
};
if (part4 != null)
{
    klaroConfig.services.push(part4.services);
};
if (part5 != null)
{
    klaroConfig.services.push(part5.services);
};
if (part6 != null)
{
    klaroConfig.services.push(part6.services);
};
if (part7 != null)
{
    klaroConfig.services.push(part7.services);
};
if (part8 != null)
{
    klaroConfig.services.push(part8.services);
};
if (part9 != null)
{
    klaroConfig.services.push(part9.services);
};
if (part10 != null)
{
    klaroConfig.services.push(part10.services);
};
