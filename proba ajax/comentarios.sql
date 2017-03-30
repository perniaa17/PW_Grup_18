-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-08-2012 a las 01:03:39
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `contenido` text NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5638 ;

--
-- Volcar la base de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `fecha`, `contenido`) VALUES
(2337, 'pelao', '2008-01-16 01:23:36', 'gracias por el articulo, ase dias que no lograba reproducir unos videos. Me sirvio mucho'),
(2502, 'Sergio', '2008-06-06 18:56:56', 'Algo supuse cuando vÃ­ que la extensiÃ³n incluÃ­a rm, pero ha sido de gran ayuda la info. Muchas gracias.Saludos.'),
(2435, 'MsH', '2008-03-22 14:44:08', 'Justo lo que andaba buscando! salu2 y gracias! \r\nPD: Muy bueno el blog!'),
(2452, 'gracias', '2008-04-06 21:54:53', 'www.xboxadictions.com  visita'),
(2461, 'armagedonnn', '2008-04-23 06:44:55', 'muy buen aporte graxxx'),
(2475, 'Alex', '2008-05-05 16:02:42', 'Gracias por la informacion.\r\nMe fue de gran ayuda.\r\nSaludos!!!!'),
(2476, 'fadux', '2008-05-05 19:19:52', 'muchas grax por la info'),
(2487, 'carlos', '2008-05-18 02:53:35', 'gracias me descargue unos videos y por poco los borro pero bi el formato y entre a google y me aparecio este foro asi fue como pude saber de esto graciasssssssssssssss'),
(2498, 'shaco', '2008-06-02 08:22:54', 'Genial, gracias por compartir tu sabiduria con las demas personas, me has quitado una duda de ensima :) \r\n\r\nSaludos y mucha suerte!'),
(2499, 'externo', '2008-06-02 08:42:56', 'el conocimiento es conocimiento cuando lo compartes, y tu lo haces muy bien, muchas gracias...!!!!'),
(2539, 'PAblitoo', '2008-07-16 09:21:12', 'De diez viejo! de gran ayuda la INFO!..'),
(2541, 'D3v1lc0d3', '2008-07-16 11:30:54', 'Gracias por la valiosaaportaciÃ³n'),
(2549, 'braian23', '2008-07-20 11:35:43', 'www.piratabj.blogspot.com\r\nwww.piratabj.blogspot.com\r\nwww.piratabj.blogspot.com\r\nwww.piratabj.blogspot.com\r\n\r\nvisita este blog esta muy bueno lo recomiendo'),
(2559, 'victor', '2008-07-22 19:23:27', 'esta muy buena la aportacion, pero me podrian decir como los puedo convertir a un formato de DVD?\r\n\r\nmuchas gracias de antemano, saludos'),
(2564, 'whizper', '2008-07-24 08:53:39', 'La verdad es que quise descargar el Reproductor pero veo que ahora se Paga $ 29'),
(2596, 'artur', '2008-08-09 08:57:39', 'jey gracias q bueno encontrar en la web informacion buena y directa ... aunque ahora hay q pagar para bajar el reproductor xD'),
(2619, 'el barto', '2008-08-16 18:16:06', 'todo bien, pero queria ver si habia una forma de bajar un codec de rmvb, sin necesidad de bajar e instalar el real media, una amigo tuvo esta posibilidad y queria preg si saben de donde lo puedo sacar o con que nobre buscar. tsmpoco quiero un "super" pack de codecs pq el que tengo me reproduce todo, menos rmvb'),
(2628, 'mauro', '2008-08-19 18:55:58', 'con el converttodvd quedan perfectos en dvd'),
(2653, 'AnkieL', '2008-09-03 05:52:09', 'Muchas gracias, la info justa.... una gran ayuda.\r\n\r\nGracias desde Chile'),
(2670, 'Zerocool', '2008-09-07 13:04:33', 'Muy buena la informacion.Gracias por el tip'),
(2725, 'alma solis', '2008-09-22 23:51:12', 'hola puedo ver mi pelicula extension rmvb con el real alternative, pero solo en mi pc, me podrÃ­as ayudar diciendome como la puedo grabar a dvd para poderla reproducir en mi dvd de salon, intente utilizar el convertxtodvd, pero al insertarlo en el reproductor de dvd me informa lo siguiente BAD DISC, gracias de antemano por tu ayuda'),
(2729, 'Diogenes', '2008-09-25 07:58:33', 'Gracias. Me vino de diez. Muy buena la info.\r\n\r\nSi les sirve yo lo estoy descargando de Taringa! \r\n\r\nhttp://www.taringa.net/posts/downloads/1575461/RealPlayer-Plus-EspaÃ±ol-11_0_5-Build-6_0_14_826-Final.html'),
(2733, 'Azucena Orozco', '2008-09-28 15:32:58', 'Gracias amigo!!!! No sabes cÃ³mo me acabas de ayudar. Fue muy sencilla tu explicaciÃ³n.\r\n\r\nGracias nuevamente!!!! :D'),
(2765, 'rmonfred', '2008-10-14 12:19:33', 'Me pareciÃ³ muy buena la explicaciÃ³n a sido clara y concisa'),
(2771, 'emma', '2008-10-16 18:34:11', 'excelente aporte, queria ver la peli WALL E y la descargue en este formato y ya me estaba comiendo la cabeza no sabia que haer, gracias mano!!!'),
(2772, 'Elias', '2008-10-16 19:20:27', 'gracias esto que servirÃ¡ para el vÃ­deo que estoy descargando, gracias de nuevo.'),
(2777, 'Yop', '2008-10-18 15:30:32', 'mmm...\r\n\r\nTengo una pregunta aunque quizÃ¡ ya se haya respondido por ahÃ­:\r\n\r\nExistirÃ¡ algÃºn plug-in para reproducir estos videos con el clasico windows media player?\r\nLa verdad es que me es molesto instalar tantos reproductores como el real player o el quick time, por eso he recurrido a usar plugs, el problema es que los plugs hasta la fecha no lo reconocen y solo he encontrado plugs para la versiÃ³n mobil del media player.'),
(2792, 'Rommel', '2008-10-23 11:42:36', 'Gracias tu explicacion es simple y concreta y ayuda muchisimo ya pude reproducir los videos con formato RMVB\r\n\r\nGracias desde Ecuador'),
(2793, 'CÃ©sar Vilela Requena', '2008-10-23 17:37:05', 'igualmente agradezco lainformaciÃ³n surtida en este lugar, ya pude ver el video de excelente calidad. \r\n\r\npregunta, ahora como podrÃ© guardarlo y verlo en mi reproductor de casa (DVD y TV), no en la PC ??'),
(2804, 'enrifer', '2008-10-27 17:07:57', 'a todos los que preguntan como ver la pelicula en el reproductor de casa, osea en la tv de la sala, en internet pueden buscar un programa de vso software, creo que se llama xtodvd converter o algo por el estilo, ese programa les servira, para convertir y hasta quema el dvd con los videos, muy bueno yo lo tengo y hasta el dia de hoy, un aÃ±o despues de usarlo, no encuentr nada mejor'),
(2833, 'noeeee', '2008-11-09 09:08:26', 'Jo mil gracias!!! Estaba desesperada intentando encontrar cÃ³mo abrir estos archivos :D ya soy un poquito menos tonta gracias a ti :D'),
(2869, 'felipe', '2008-11-26 19:05:22', 'muxas gracias por todo \r\neste consejo me sirve de muxo ya que tras varias semanas de borrar archivos rmvb aora gracias a uds. me di cuenta de q los puedo reproducir \r\n\r\nmuxas gracis'),
(2875, 'naty', '2008-12-04 07:34:05', 'me sirvio gracias'),
(2881, 'Eddie', '2008-12-09 21:25:57', 'se agradece hermanoo !!!\r\nta entero weno el tip .\r\nq les vaya bien ..\r\ncuidencen ..\r\nbendiciones ...'),
(2894, 'santiago', '2008-12-17 10:58:58', 'me salvaste la vida hermano, tengo q ver un video para el laburo y no sabÃ­a como'),
(2895, 'raul', '2008-12-18 07:23:33', 'te pasaste soy maniaco de la serie 24 y me baje la tercera tenporada pero no podia reproducirla me aparecia de esa forma ahora si ,muy te felicito chaooooo'),
(2906, 'Rockman X', '2008-12-25 16:31:57', 'Muchas Gracias x el tip!! =D\r\nAhora puedo ver mi video! xD\r\nGracias!\r\n\r\nAtte: Rockman X'),
(2939, 'aoi', '2009-01-09 14:45:01', 'Gracias :)\r\nExelente trabajo.\r\nQuisiera saber\r\nsi real media\r\nsirve para cargar subtitulos?\r\nOsea si tengo un video\r\ny aparte los subs, este me permite\r\nponerselos(sin pegar)...??'),
(2945, 'Alejandro Murcia', '2009-01-11 19:55:51', 'Muchas gracias por este tip ahora si puedo ver la pelicula de Hellraiser que descargue GRACIAS!!!'),
(2963, 'Juan Pablo', '2009-01-22 16:11:11', 'Muchas gracias, muy buen aporte.\r\nMe sirvio en mucho. Ahora si voy a poder mirar la pelicula [rec] que me bajÃ© :)\r\nGracias nuevamente!'),
(2989, 'carolina', '2009-02-03 19:07:06', 'hola, una pregunta, me baje una peli en este tipo de archivo y cuando la grabo con el nero (como archivo de datos), despuÃ©s no la puedo reproducir en mi dvd (he probado en tres dvd). CÃ³mo soluciono este problema? muchas gracias'),
(2990, 'Itzel', '2009-02-04 07:19:33', 'Grax por el tip... y para Caro los dvds en Nero no los quemes como archivos de datos... para eso hay una opcion de DVD, Checalo'),
(2992, 'sanie buena', '2009-02-04 15:27:32', 'gracias por la ayuda!!!! me diste un graaaan alivio :)'),
(2994, 'CIBERNAUTAXXI', '2009-02-06 17:39:04', 'Bastante aclaratorio el articulo!'),
(2995, 'France', '2009-02-06 19:22:12', 'Gracias por tu ayuda...estuve un dia entero descargando una pelicula y despues me di cuenta que estaba en ese formato...me salvaste!'),
(2997, 'karloztt', '2009-02-08 12:22:55', 'Graxias MAN'),
(3000, 'Granmanya', '2009-02-09 11:26:36', 'Como informaciÃ³n complementaria a este buen post, les dirÃ© que para algunas pc''s no alcanza con el RealPlayer, ya que si sus codecs no estÃ¡n actualizados, los veran de a saltos. Lo mejor es bajarse el pack de codecs K-LITE Mega Pack que trae ademÃ¡s de descompresores de audio y video, el Media Player incorporado. Con este pack de codecs no tendrÃ¡n problema alguno en mirar pelis o videos con el formato RMVB. Tomen en cuenta otra cosa, a la hora de grabar las pelis tanto sea en CD o DVD , tienen que usa un programa para convertir el RMVB en formato que pueda leer el aparato DVD de sobremesa. Yo recomiendo en WINAVI, puede ser la version 7 u 8, ya que deberÃ¡n convertir las pelis, sino no podrÃ¡n verla en su DVD.Para grabadoras de CD, recomiendo que elijan en el WINAVI el formato SVCD, ya que ocupa menos espacio y mantiene una calidad muy buena de video. Los que tengan grabadora de DVD en su equipo, deberÃ­an usar mejor la version 8 del WINAVI, que es mas rÃ¡pida y por supuesto convertir a formato DVD.El WINAVI en si es un poco lento , pero con el se aseguran mantener la calidad del formato RMVB original.'),
(3017, 'Lucas', '2009-02-17 10:52:38', 'gracias men!!!\r\nme salvaste estaba descargando una serie y estaba en ese formato!!'),
(3018, 'brayan toro', '2009-02-18 14:11:42', 'muy beun post, acabo de bajar una peli y me viene en este formato y me salvaste porke si no iva a dar la hora, tratando de reproducirlo, jajja.\r\ngracias men'),
(3021, 'nube', '2009-02-20 10:29:42', 'hola... me he vajado una serie en este formato y efectivamente se me abre con el RealPlayer... pero el problema que tengo es que no sÃ© como incorporarle los subtÃ­tulos alguien puede ayudarme??\r\ngracias!!'),
(3038, 'alejandro', '2009-03-01 11:12:18', 'excelente el artÃ­culo. bajÃ© una pelÃ­cula y me apareciÃ³ este formato y por mÃ¡s que intentaba no podÃ­a reproducirlo con nada. por suerte lleguÃ© a este sitio. saludos y buen trabajo!'),
(3039, 'matias', '2009-03-01 15:48:45', 'queria hacer una consulta aveces se ve como saltado (es que se reproduce a una gran velocidad) y retrocedo y se ve bien porque pasa eso ???'),
(3052, 'LOURDES', '2009-03-08 17:14:54', 'hola...he Bajado una serie en este formato y efectivamente se me abre con el RealPlayer... pero el problema que tengo es que no sÃ© como incorporarle los subtÃ­tulos alguien puede ayudarme?? PLIS!!!!\r\ngracias!!!!!!!!!!!!!!!!!!!!!!!!!!!! =)'),
(3068, 'ZoMdAh', '2009-03-22 14:02:07', 'tnx brader sos un kpo... no soi noob en esto pero no puedo estar al tanto de todo'),
(3070, 'Jarre_Fan', '2009-03-23 16:06:08', 'cabÃ­a de cajÃ³n la sigla... no lo vi venir... en todo caso, eso pasa cuando de repente nos dejamos estar un poco con el avance en los tipos de compresiÃ³n que, cada dÃ­a aparecen mÃ¡s y mÃ¡s... gracias por refrescaros la memoria...'),
(3097, 'SERGIO', '2009-04-08 14:49:24', 'Gracias por tus comentarios \r\nMUCHAS GRACIAS\r\nTu apoyo desinteresado nos alienta seguir \r\n\r\nsaludos\r\n\r\nsergio'),
(3100, 'Gabyta', '2009-04-09 16:15:23', 'mil gracias ... pregunta  ya que solo uso el bsb player para ver y no quiero cargar mi pc con mas programas,5si bajo el real alternative puedo abrirlo con el bsb player?'),
(3120, 'ibanya', '2009-04-21 20:41:46', 'gracias muy util tu respuesta'),
(3134, 'adrian', '2009-05-02 12:49:15', 'Â¿puedo grabar un pelicula de ese formato ( RMVB ) ?'),
(3144, 'akv2002', '2009-05-05 18:07:49', 'Estimados amigos:\r\nEstoy bajando una pelicula en Rmvb. El tema es que son dos archivos *.rar\r\nÂ¿Que pasos debo seguir para que pueda quemarlos en un DVD? Es mi priemra experiencia haciendo peliculas. Gracias un millon'),
(3222, 'Edgard', '2009-06-08 14:36:05', 'Hola agradeazco enormemente este articulo, porfin podre ver los videos que he descargado y tengo en ese tipo de archivos. gracias. saludos desde Venezuela'),
(3256, 'nino dj', '2009-06-17 15:06:54', 'buen aporte men gracias por el aporte'),
(3292, 'juan felipe', '2009-06-29 20:40:47', 'estoy convirtiendo una pelicula en formato rmvb con el super dvd creator 9.3  Â¿me va a dar resultado ?'),
(3309, 'fermin', '2009-07-03 15:01:50', 'che hay qe pagar para el real player :S. otra forma de descargarlo sin pagar, me habisas a mi mail ? feermiin@live.com.ar GRACIAS'),
(3363, 'Burbin', '2009-07-19 11:11:05', 'muchas grasias, haora ya puedo ver la pelicula de watchmen que estaba en .RMVB'),
(3364, 'yope', '2009-07-19 11:19:04', 'excelent aportacion!'),
(3367, 'juan manuel', '2009-07-19 18:40:19', 'muy buen aÂ´porte. Agradezco la explicacionÂ°Â°'),
(3373, 'pepe', '2009-07-21 08:00:12', 'Muy buen aporte te felicito me sirvio mucho'),
(3381, 'Zoe', '2009-07-23 21:26:41', 'GRACIASSSSSSSSSSSS!!!!!'),
(3388, 'Violetacielo', '2009-07-26 05:58:21', 'muy clara tu explicaciÃ³n. Gracias'),
(3394, 'Hernaldo Amador', '2009-07-28 20:31:39', 'Buena Informacion pero lo que necesito saber como hago para reproducir estos videos en un dvd casero. gracias hasta pronto cualquier informacion mandarmela porfavor al correo hfag29@hotmail.com'),
(3396, 'Pily', '2009-07-29 06:43:07', 'Espero que funcione. "AsÃ­ da gusto" ;)'),
(3424, 'peligromundial', '2009-08-07 15:51:56', 'muy buena la info\r\ngracia'),
(3425, 'peligromundial', '2009-08-07 15:53:04', 'ese sirve para ver todo los video inclusive los avi?\r\ngfracias'),
(3428, 'Jim', '2009-08-10 01:39:50', 'hola... bueno nada yo en ves de usar el realplayer..\r\nuso el GOMPLAYER que me reproduce tambien otros formatos.. y es bastante liviano..\r\nesta bueno como opcion...\r\nlink: http://www.gomlab.com/eng/GMP_download.html\r\nsaludos'),
(3476, 'laura', '2009-08-24 12:37:58', 'yo tmb uso el gomplayer, pero esta extension de archivos no me reproduce'),
(3493, 'javier', '2009-08-29 08:04:05', 'Muchas gracias por esta informacion'),
(3540, 'avalero', '2009-09-10 15:52:55', 'gracias que hariamos sin estos consejos\r\nsaludos'),
(3548, 'anonimo,,', '2009-09-12 12:37:12', 'puedo verlos con windows media player 11??'),
(3600, 'Jose', '2009-09-30 14:00:56', 'Hernaldo Amador, para poder verla en un dvd casero, tendrÃ¡s que convertir esa pelÃ­cula XXX.rmvb en por ejemplo, XXX.avi\r\n\r\nPara eso busca en san google convertidor de video.\r\n\r\nUn saludo'),
(3660, 'casillas', '2009-10-28 10:37:01', 'ola amigos miren n acen falta tener el realplayer yo uso un programa para cambiar las extensiones o formatos cmo kieran llamarlo se llama (change type)y le pngo .avi y asi lo puedo abrir cn el reproductor de windows media'),
(3672, 'adeus', '2009-11-06 00:27:10', 'No es necesario el real player, lo importante es tener los codecs adecuados, yo utilizo el Windows Classic (que por cierto es de lo mejor) para reproducir estos archivos.'),
(3679, 'oseasoliva', '2009-11-07 17:39:32', 'Deseo saber si rmvb es mejor que divx. Tomando en cuenta: el tamaÃ±o del archivo y la calidad de imagen.\r\npor ejemplo:\r\n\r\nEn un video de 10 minutos,\r\ncuanto pesa divx?\r\ncuanto pesa rmb?\r\ncual se ve mejor?\r\n\r\ngracias por responder a:\r\noseasoliva@gmail.com'),
(3690, 'Marcelo', '2009-11-13 05:47:03', 'Muchas gracias por la info. Me resulto muy util.'),
(3708, 'riki', '2009-11-19 13:53:13', 'con el reproductor vlc media player'),
(3840, 'Luis', '2009-12-26 10:05:02', 'Yo, si puedo reproducir estos archivos sin problema alguno. La mayoria de archivos de video instalando los codec. K-Lite_Codec_Pack_Mega la pueden bajar del siguiente link:\r\n\r\nftp://majorgeeks.mirror.internode.on.net/multimedia/K-Lite_Codec_Pack_551_Mega.exe'),
(3845, 'Perla', '2009-12-28 23:49:59', 'Hola.\r\nGracias, eres muy amable al explicar.\r\n\r\nYo tengo un problema. \r\nEstoy tratando de abrir un archivo RMVB que bajÃ© de internet y viene en WinRAR. Cuando lo intento, dice "inserte un disco con el sgte nombre", que es el mismo nombre que tiene el archivo... Y no entiendo por quÃ© no abre si yo tengo el RealPlayer...\r\n\r\nCuando veo el menÃº del botÃ³n derecho, no sale la opciÃ³n "abrir con...", y cuando intento extraer el archivo, me vuelve a decir eso de "inserte el sgte disco"\r\n\r\nNo sÃ© cuÃ¡l serÃ¡ el problema. EstarÃ­a muy agradecida si puedes ayudarme.\r\n\r\nSaludos, y gracias de nuevo.'),
(3855, 'Will', '2009-12-31 14:54:04', 'He bajado 5 archivos de internet q tienen los nombres de archivo.rmvb.0, archivo.rmvb.1,  y asi hata el quinto archivo.rmvb.4, no puedo verlos con real player ni con otro reproductor, le cambie las extensiones 0, 1, 2  por rar y no abre, con zip tampoco. \r\n\r\nComo puedo ver estos archivos o descomprimirlos si q lo estan o unirlos, o cambiarles de formato, pero algo para verlos.\r\n\r\nGracias de antemano'),
(3880, 'cesar4390', '2010-01-09 17:15:14', 'gracias por tu ayuda pero tenia el real player sp pero ala hora de convertirlo en dvd no se oye entonces lo quitepor eso quiero mejor el real player clasicc pero no puedo instalarlo alguien me puede ayudar mi correo es principenovato@hotmail.com gracias....'),
(3899, 'Henry', '2010-01-14 04:07:35', 'es necesario el real player o lo puedo abrir con otro reproductor de video'),
(3930, 'joan', '2010-01-26 19:14:00', 'se agradese la ayuda'),
(3941, 'jalcoi', '2010-01-30 16:30:04', 'Yo tenia uno de esos archivos rmvb y lo convertÃ­ a AVI con el programa gratuito Format Factory para poder grabarlo en DVD y verlo en mi TV con mi reproductor domÃ©stico de DVDs que es de los antiguos y me diÃ³ buen resultado.\r\nRespecto al programa Format Factory muchas veces lleva virus, yo lo conseguÃ­ sin virus de http://www.4shared.com/get/96643249/23def99/FFSetup_sinvirus.html;jsessionid=93AD0E9F489384558E30CF96E3B2C249.dc156'),
(3952, 'manuel', '2010-02-05 08:33:48', 'para will:\r\nno se si esto te ayude pero me parece que es una version de hacha con la q el archivo fue partido, descarte el programa para volverlo a unir\r\n\r\nposdata:\r\ninformate bien primero del programa, xq no recuerdo si la version mas nueva era la que decia sus extenciones asi .0, .1, .2, etc Ã³ asi .000, .001, etc.\r\naunque creo que lo mas logico seria q la version mas nueva soportara sus versiones anteriores de formato\r\nespero te funcione'),
(3964, 'Nicoo!', '2010-02-11 21:35:36', 'Muchisimas gracias kapo! Tengo unos capitulos del chavo del ocho en este formato! espero que sirva!'),
(4055, 'coto', '2010-03-31 15:03:16', 'y para MAC ? ayuda plz respuesta al mail \r\nperfoxez@hotmail.com porfavor \r\ngracias !'),
(4064, 'Nacho', '2010-04-04 07:46:07', 'Y despues que tenga el real player lo puedo quemar en un DVD? Es que bajÃ© el arhcivo y se supone que es una pelicula... Lo podrÃ© quemar usando el ConvertXtoDVD?? Gracias!!'),
(4098, 'enoel', '2010-04-18 21:24:14', 'gracias, habia tenido el mismo pobleme pero gracias a su ayuda lon resolvi'),
(4195, 'mikecoal1953', '2010-06-07 14:02:25', 'Como se pueden ver estos archivos en un reproductor comun DVD ?'),
(4248, 'juan', '2010-07-08 19:36:02', 'gracias tenia 15 peliculas asi y no sabia  que aser'),
(4276, 'thebicbic', '2010-07-19 17:52:11', 'graxiax carnal no sabia'),
(4331, 'titi', '2010-08-18 10:44:07', 'muchas gracias. pase dos dias descargando una peli porque estaba en 4 partes y cuando la quise ver no podia. otra ves gracias. chau'),
(4339, 'raquel', '2010-08-21 15:25:49', 'Con el Media Player Classic (creo que lo traen instalado todos los ordenadores) tambiÃ©n se puede ver sin necesidad de descargarse ningun programa'),
(4384, 'limma', '2010-09-07 13:26:25', 'tengo el real player sp pero no puedo reproducir una pelicula que esta en archivo rmvb, por que?\r\nla pelicula esta en 5 partes, entonces el formato dice: ejemplo.rmvb.001 ejemplo.rmvb.002 y asi hasta el 005. tendra eso algo que ver?'),
(4391, 'Ruben', '2010-09-08 22:35:28', 'LIMMA tienes que unirlos con el hjsplit descvargalo de softonic'),
(4438, 'Maxi', '2010-10-03 00:03:36', 'Gracias me re sirvio man'),
(4520, 'Denisse', '2010-11-20 06:58:04', 'Me sirvio mucho gracias  me estaba frustaba y querioa verla, aunq tenia codepacks aun asi no podia ver jejejje\r\n\r\nPero con el real alterantive lo pude ver gracias'),
(4521, 'arturo', '2010-11-20 12:07:39', 'Excelente buen aporte'),
(4526, 'ronny', '2010-11-24 22:45:37', 'de lujo brother..\r\nme sirvio muchisimo..\r\ngracias.'),
(4538, 'cebratreo', '2010-11-29 09:59:57', 'gracias por este programa que si mucha falta hace a todo el mundo para la reproduccion de videos'),
(4542, 'Alexis Orozco', '2010-12-01 06:40:26', 'Gracias muchas gracias por tu aporte no tenia ni la mas minima idea de que era el formato rmvb gracias por tu informacion si se me ve la pelicula,.'),
(4554, 'loboin', '2010-12-10 20:41:29', 'bueno ami no me sirvio, hice lo que recomendastes pero sale un aviso de que ma faltan codecs, no se que sera lo que pasa instale el real alterntive 2.0.2'),
(4907, 'Laura', '2011-03-07 21:55:43', 'Yo lo abrÃ­ con el "Final Media Player'' y se ve super bien..pero si me falla bajarÃ© el RealPlayer. Gracias!'),
(5016, 'cristian mark', '2011-05-18 17:56:35', 'utilizen vlc media player efectivo'),
(5105, 'JosÃ©', '2011-07-15 10:36:23', 'No necesitas bajar el real player, lo que yo hice fue descargar el format factory que es un programa para convertir archivos de audio, video, imagen,  etc.Es muy rÃ¡pido y Ãºtil. Solo lo conviertes y a disfrutar!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
