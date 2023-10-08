-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 أكتوبر 2023 الساعة 11:45
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ky`
--

CREATE TABLE `ky` (
  `order_id` int(11) NOT NULL,
  `nameee` varchar(50) NOT NULL,
  `discrbshn` varchar(500) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `leftt` varchar(100) NOT NULL,
  `file` longblob NOT NULL,
  `fileName` text NOT NULL,
  `fileType` text NOT NULL,
  `urll` text NOT NULL,
  `sll` varchar(50) NOT NULL,
  `uploads` varchar(1000) NOT NULL,
  `userr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `ky`
--

INSERT INTO `ky` (`order_id`, `nameee`, `discrbshn`, `model`, `price`, `leftt`, `file`, `fileName`, `fileType`, `urll`, `sll`, `uploads`, `userr`) VALUES
(22, 'ijhrjjd', ';piouherjs\r\n', '6573792', '6376', '63528', 0xffd8ffe000104a46494600010100000100010000ffdb00840009060710101010100f10100e0e0f0f100f0e100d0f0f0d0f0f0f1511161615111315181d29211826251b131522352427292e2e322e18203338332d37282f2e2d010a0a0a0e0d0e181010172d1d1d202b2e2b2b2d2d2d2d2d2b2d2d2d2b2b2d2b2b2d2d2d2d2b2d342d2d2b2d352d2d2d372b2d372d2d2d2b2d372d372b2b2d3332ffc000110800e100e103012200021101031101ffc4001c0001000105010100000000000000000000000702030405060108ffc400551000010302010704080f0e040700000000000102030411050607122131516113224171141555748191b2b3323334355262657392a1a2b1c1d2d317232454647275829394a3b4d1e3164243c236566385a4e1f0ffc400190101010101010100000000000000000000000102030405ffc4002411010101010001030305010000000000000001110203041221133171323341518122ffda000c03010002110311003f009c400000000000000000000000000000000000000000000000000000000000000000000030b18c522a485f3ccba2c62746b739cbb1ad4e955033410f6259c0ae9dcee455b4b127b1462b9a9d0af91dabc46a972b2b575f6cd6fc248adf132c4d5c4ec082932aeb7ba6efda47f50f532aeb3ba4efda449fec1a62740420dca4afd4bd9b3d9762a3a27357a951a57fe21aff00c76a3c717d51a626c041388e5855d3c6e924afa846b6c9ab925739cb7b35a9a3ad56cbe25dc6561c995356c491933686375963ecd95cb3ab552f756b18a89d4ad451a626c043fda2ca9eed41f03fb23b47953dda83e07f64699530020bad9f1b81eb1cd94d8743236da4c964898f6df5a5dab15d0c7eda62dff35617fb687ecca627c041941263950fe4e0ca5c3e792caa8c8648e47aa26d546a457367da3ca9eed41f03fb24d3130021fed1654f76a0bf47317ec4498b653e1cde5aa129b14a766b9929efcaa3536bbd0b57c48a34c4c00d1e47e5453e294cda9a755445e6c91bada713fa5aefebd26f0a800000000000000000000118e78ab1da74b026cd192554deeba31b7f1b89388933c0b6ada5f784f3c4a44439478ab91eb1b57991b95ad4d88ae4d4af5ffee94e37d6478a4ecd6e5d26ee546a71e8d87b8b44aaf72ef739538ef4f890b134d2c888d722d91516eadd1b59ad6a6bb6e6a6afeaa5983a282647b51c9b152e76f91386d2cd14ab2a46f91349152454bb35268aa22ec4dbaffa11fe1cdb3513e7d5e152a7e29122d9b13a6b6a572bd2345fcd422b7ab3b619de913b4a0e515352dd1ccbed4df6e853787210cf1cac5747a49a36492392da4cbec5ba6d4e27530baed4ea4f9900ab26a89b558d52c72223a2a5825add05d68e951fa0d55ea548d7c1c49a14887375ebe3ff0045bff99612e39c46a0aa50ae2dc9298f25420c690de5166a2be4aba8961929e48e69a499ae9247324e7b95d67268aeb4bedbeb35ab9a1c4f7d2fed9df549bdd54851d948699f6c4599239aeae82b29a79e48238e9e66cce586473e57e8adf934e6a6a5b5975ec55269471ac6d5217e3a842559319e8a54863b252f35c4547f910cec1ca4c428a34d1a7aa812ad8c45e6b5ca8d73ac9d1ce73d3a91097089693fe2f6fe8d5f0f354968b1ce8002a000000000000000004439e45fc3693de13cf12f10fe79d6d594bc20bff189562229ed77696cd2771e952c44d8efa95b7e0ad5f997518f89b979456aea4d3722ff004f8fe215546c6b5ee6bdaaac7b5a9a2bad7988e576dd975b5cd49a96b3e7f42a89d29635f4d3311111c8b745e8dc89b2dd77f1f032607ab9897db64f98b6f89b7bb9a8be15455eb12e52cd6460eebbe6722598912b57ad5c9a2dfa7c076d4aee637a93e638d896c888888d6a6b46b52c97dfc4eb689798dea433563699bf7db1a7afb96ffe65849f3d5a21126494da38bb97dcc727f1da7695788f13af1e3d9a9eecf86daa2bf89af9b11e2682a712e26b26c4f89abc6352ba77e23c4b5db1e2726fc4b896fb65c498d6bb56623c4cb8711e2706cc4b89970e25c47b5352153d7f13630552291fd2e25c4dcd2621c4bf4b59bd63170f75f2b9abee6af924b843393d2e9655357dce77924cc71b32e26e8000000000000000000004419e76deae9d37d2bbcea92f90e678a5bd74296b68532a5f7ddf7fa4956221c5e8d74956cab75badb6df7a1ad4877aaaf0b237c6b73b67b11db52e59ec166e1a639d892c879244ae5d4752d83db3fe1295253a74b9ebfaca06968a91dcd45454dc8a96555eae843a785ba2d44dc8588626b76258bd702ce112e8626abbf0f5f3c8a6dababf6eb39959f4310674695168fca72fd02beb369f43d3c9f4b5e6eedfa98caaac4389ae96bb89ada8ab3064a939775de36eeaee251d9bc4d2ad414f2e72d56fd95dc4ca86bf89cc36a0bd1d49651d952d7f137b435fb3591fd3559baa0acd9acf5f8b2b8f9371d86444ba594ed5fc81c9f2109ccf9e336b577ca4bedfc1d634f0c6c4bfc6a7d0e78bcbfafafcb7e3fd30001cdb0000000000000000085f3c0bf87c7ef1f4a13410b678d152be2dcb4fab8f3900e2daa548a59452b471157514ad14b28e2a4502f22955cb28e2ad2039cc7a6e4eb6077fd16a7c257a2fce6356d4eb529cb25fbfc7deecf29e6adf3ab9a8bd3b17acf4f87bce6f2e779ffad552cc58590a15c53739f5d34a95c348a018d5568e2b6c8593db96519b0cc6d686a75a1cfb5c6424ead6aef5d487a7c7de7cb1d4d77b99d9b94c75afded92dd576a27c47d367cbb98c455c622b6bfbdbd7c1769f511e5b76eb7264c00040000000000000000021bcf6fab297bd5de7499086b3ddeaca5ef5779d023f452a452d2295229157514ad1c58452cd6cead4444d4ab7d7b9100cb9a746355cbaf726f52b85eaad457259575aa6e348950f4ff32f8ee65e1ce72aaaab97453a175dd40d2e577a747ef0df38f34d1becbaf5a2ea54373959e9b1fbc37ce3cd1965c4abd3c0ad44727398ef42e4d8bc1772f02c9914956e8d56c8d735d647b1e9a4c7a26f4fa535a74299ada6a69bd2e5ec5917fd3a9bba255d7e82644d5d4e44fce5357e7ec8d5036afc9dac44d26c0f958bb1f4d6aa8fe1c5a49f198a985d45edc84d7ddc9497f98cab101b5664ed5db49f0ba066ae7d52b6919e059152fe03c586961f472765c9af990e947022fb691c88e7753513f38b20c186055457af3588b6576f5f62ddea5b91f75dc9d09b90bb5554e916eeb2226a6b5a88d6313735136160b6ff0011123e607d79677b4fe4a1f4e1f31e607d79677b4fe4a1f4e1950000000000000000000008673e1eaca5ef5779d266218cf8fab297bd5fe7408f114f514a05c8ab88a63d7b6ed45f62bf1297514f6e06aae6561f22a3ac9ad176f0b7497d2067b14f9cae2635b7d14b5ca8d0e557a6c5ef0df38f34a6eb2a7d322f786f9c79aaa7874dd6ba35112ee72ec6b536aa815d151c933f4226abdd6555b5911ad4dae72aea6a26f5d46cdb0d0d3fa739f5d2a7fa74cee469916eba9d32a2b9ff00aad44dce530aa6bb98b0c48b1c1745727f9e654d8e95536f04d89d7ad7040deb729e48d5bd8d4f474ba37d158e9639e4ebe527d37f8950c9ff001fe2bb3b324b7b156c6adf83a36399051bc5ca57497ec9a6a3aa472dd55d4cca693af94a7d0778d54a569a8ea3d2247524ab7fbcd5bdaf85dc193a2268f53da89ed8d2802f55d2c913d63958ac7b76b5c96ea54de8bbf62964cf82b749890cf77449e96edaf817da70dedd9bacbacc49e1563acb65e9454d6d722ec5452090f303ebcb3bda7f250fa70f98f303ebcb3bde7f250fa7000000000000000000000010be7cbd594bdeaef3a4d042d9f3f565277abfce811d5c5ca6e2e455771728b9e5c0b973dd22ddc5c0d2e53fa645ef0df38f305ed56b11bbece7f15e84f07cea6d3178b4e7a76ef85b7ea47c8abf318d5b0eb53bf8b8d96b8f7e493a9cb54a8785e7b0b6a862c7495483db032af01ed8f5100f110c9d1d265ba5b756f574a7d3e3de5b630d95143ad0ede3e37e1c7c9e4f6cd75f982f5e59def3f9287d387cd198c8b431c46fb182a113aac963e973859971d65d9a00028000000000000000042b9f5f565277abfce93510a67dbd5949deaff3a046f717291722aab9e5ca6e2e05571729b8b81545069d543ed6915df2de9f494d7d26dd46d326e0d3ad6a6ec3dcbfc7b7d26df11c2f6ea3e87a793e97faf8feabaea7a8f8fb6447735318af84ebaab0de06b66a0e072ef98f5f8fbae7d633cd0370ea228ec35dc72f6bb7bdab48cbac84d9368b81950d07035394ebbad6c14c6eb0fa4d69a8cba4c3781d061d85ecd47afc523e77a9efacf8334d0e86515bf269153c3134fa2482320e0d0ca66a7e42f5f91ffa2773c3e5fdcebf2fa5e9adbe1e37fa8000e6ec0000000000000000109e7dfd5949deaff3a4d84259f9f565277abfce811adcf2e7879722aab8b948b81edc5cf2e2e074f9011e962289ee63d7ff00210eeab70fbf41c7e6b99a58a227b96ffe65a4ab3d21e9f1779ce3c5e6f1ef7a8faaf0be06a27c2f812354507035f361bc0b7ad39e711e4985f02df6b381debf0ae051da9e0675bc7151e17c0cda7c2b81d6330ae0654386f012a58d051e17c0ded161f6e83654f41c0d94148749de3975e3d7139391e8e55313dcf77924d243f8632d95ac4f7397c952603cdd5dead7b3c73389000196c0000000000000000210cfcafe1949deaef3aa4de4359fda4772b453db98ac96155f6d76b93e2b8114dc1e5cf2e457a0f001e83c007739a2d78aff00daa4dbdf2c2677c24219abad6c58b52e9ad92a28e7a56af472a92aca8c5e3a28cf8484f2ad352b9f5ced6b64a62c3a8f81b756142c65d67dad3ad17029ec14dc6e1631c98d31a94a22e329381b248ca9231a630a3a6321909908c2b468f72fb51b536acaf67e8e5f21496c893271fd959595b3476745454a94ee7356ff007cd16b5c9e077289faa4b665b9f600014000000000000000034d95993d16234cfa6979b7e746f4f451c89b1c86e401f356399bfc4a91ea8b4ef9e34be8cb4ed591ae4ea4d69d4a689709aa4db4b549d74d327fb4fac801f26f6aaa7f15a9fdde6faa3b5555f8ad4feef37d53eb2041f26f6aaa7f15a9fdde6faa3b5753f8ad4feed37d53eb2007c9edc32a6d65a7ac659c92472474f3a490cadd92335270ba5d36274a21216159c7c5a08dadaac356bd5111396a757d3caf4b7a2744ac55bfeab7a89b814441f7589bb895f74dbe8b57f0cf3eead3771310f97f664c002621efbaacddc4aff97f663eeab37712bfe5fd9930806443df7559bb895ff2feccf7eead3771310f97f664c00191102675e6e8c1310f97f66532e5463f88b791a0c2dd87249cd754d53d5ce8dabd2dd26b7457c0bc3793080b8e5b37b91b1e154cb1e972d512bb94a99976c8fe17e843a9000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000fffd9, 'download.jpg', '????\0JFIF\0\0\0\0\0\0??\0?\0	\r\r)!&%\"5$\')..2. 383-7(/.-\n\n\n\r- +.++-----+---++-++----+-4--+-5---7+-7---+-7-7++-32??\0\0?\0?\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0U\0\0\0\0\0\0!1Qa\"AqUt????2345Rbes???????#$Tdru???????BC?6Vc??????\0\0\0\0\0\0\0\0\0\0\0\0??\0$\0\0\0\0\0\0\0\0!1q23AQ?\"??\0\0\0?\0?@\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\00??R*H_<ˢ?\'F?9˱?N?P3AbY?????U??\'?F+??\n???j?++W_l??$??,M\\N???*?{???G?S*?;???D??\Zbt ܤ?Խ?=?b??sW?Q??\Z?\0?j<q}Q?&?A8?XU???$??F?ɫ?W9?{5???V??]?V?SVđ?6?7Yc??\\??U/uk??J?Q?&?C??ʞ?A???;G?=ڃ?di?0?????M?C#m??d??m??ڱ]~?b??V?h~̦\'?A?c????\\>y,???H?z?mTjEsg?<????$?\0!??eOv??G1~?I?e>?Z?)?Jvk?)?ʣSk?WĊ4??\rG?E>)LښuTE?????Z???o\n?\0\0\0\0\0\0\0\0\0犱?t?&?%T????8?3???????ĤD9G????y??Z?؊?ԯ_??N7?G?N?n]&?Tjq??{?D??.?9S?????4?Ȉ?\"???Y?jk?榯꥘:(&G??.v?????*F?I$T?5&??.?ۯ???5???R???\"ٱ:kjW+?4_?B+z??ޑ;JQSR???M??Sxr??WG??6I#??L?źmN\'S???O?\0?&??U?R?\"#???Z?֎???^?H??Ě?su???\0E?????F??P?-?)?%Bi\r?j+䫨?)??i????G2N{??rh?????5??O}/???I??HQ?Hi?lE?#???+)??H#??f???G>W???4榥??^?RiG\Z??!~:?%Y1??T?;%/5?T????(?M\Zz???E??ʍs???=:?	p?i?????_5Ih?΀?\0\0\0\0\0\0\0\0D9?_?i=?<?/?y?Ք? ???V\")?wil?w?,D???[~\n???Q???yEj?M7\"?\0O??Tlk^潪?{Z?+?y??vݗ[\\Ԛ????*?Җ5??1ȷE?܉??w??2`z??}?O????{???E^?.R?d`???r%??+W?\\?-?|mJ?cz??8ؖȈ??jkF?,????h??ޤ3V6??}????o?e??=Z!d??8????\'??v?x??=????m?+????&???k&????cR?w?<K]??roĸ??eĘֻVb<L?q\'?K??%?{SR=cR)??\\M?&!ĿKY?cu????j?$?C9=.?U5}?w?L?2?n?\0\0\0\0\0\0\0\0\0A?vޮ?7һΩ/??x??t)khS*_}???b!???IVʷ[???z\Zԇz???7Ʒ;g??.Y?n\Zc??,??D?]GR?=???%:t?????????TT܊?U^??:x[??M?X?&?bX?p,??bj????Ȧں?n??Y?1tiQh??/?+?6?C??????ߩ???C????????0d?9w]?n??%??ҭAO.r?o?]?ʆ???6??Ie?-{C_?Y?U??\n͚?_?+??q?dD?YN??????Ϟ3kW|?????4??ĿƧ??????????0\0?\0\0\0\0\0\0\0\0_<?|~???4?x?R?-?O??9\0?ڥH??R?qu???*E?)U?(?? 9?znN??j|%z/?cV??R??_??????j?:???;???{?o.w???R?XY\n?79??J??H??V?+l??ۖQ??ֆ?Z?\\d$?֮?ԇ???|???{?ٹLu???-?v?|G?g˹?E\\b+k????v?Q[v?rd?\0@\0\0\0\0\0\0\0\0!??????]?I??????^?w??E*E-\"?\"?WQJ?ńR?l??DMJ?׹??F5\\??&?+???ErYWZ??H?O?/??^?*???E:]?\r.Wzt~??8?M?????T79Y????|??eī???Drs??B?ؼr?,??n?V??5?G???ǢoO?5?B????????Y?:??%]~?dM]ND??5~~??j???D?l????֪??Ť???]E??M}ܔ????Vd?]???f?}R????R?ņ?G\'eɯ??p\"?i??u5?? ??TW?5??Wo_b??[??]?Л??UT???\"jkZ??175a`??\0>`}yg{O?????`}yg{O?????\0\0\0\0\0\0\0\0\0\0g>???Wy?f!??????_?@?OQJȫ??={n?_b??QOn??V\"????v??I} g?O??&5??K\\???W???\r??4??*}2/xo?y???Mֺ5.?.Ƶ6??]??B&??eU??\Z???*?j&??l?\r\r??9?ҧ?t??i?n??2???\0??M?S\n????ċEr?eM??So؝z?\r?r?Hս?OGK?}??9???\'??P??\0??;2K{lj߃?c???WI~ɦ??G-?]L?i:?J}x?JV????$u$??ս???:\"h?=???Ҁ/U???9X?{v??n?M???)dς?I??tI?n???p?ݛ???I?V:?e?EMmr.?E ????;?%?????;?%?\0\0\0\0\0\0\0\0\0\0\0?|?YKޮ???B???e\'z?΁\\\\???Uw(????s?\"???????E?\r??0^?k????^??|?m1x???n?[~?|??1?[?;???k?~I:??J??簶?b?IT??*????&[??V?t????[c\r?:????~|?Ol?_?/^Y???(}8|јȴ1?o?????c?s??q?]?\0?\0\0\0\0\0\0\0+?_VRw???5?}?YIޯ??F?)\"????n.W)??E?T>֑]?ޟIM}&?F?&?ӭjn?ܿǷ?m?/n??zy>??????????dGsS??몰??j.??_????3?p?\"??]?/k???Hˬ??6???\rS?????Ln??Mi?ˤ?x???z?R>w????3M?Q[?i<14?$?2\r?j~B???\'s???ο/?魾7??\0??\0\0\0\0\0\0\0\0?}?YIޯ???BY??e\'z?΁\Z??燗\"???H??\\???t??\"??c??\0!???A?湚X?\'?o?e??=!??w??????z?????|/?#TPp5?a?zӞqI??-???޿\n?Qڞu?qQ?|?|+??3\n?eC???????a??6T?\r??I?9u??????S??y$?C?c-??Os??R`<?]?׳?3?\0??\0\0\0\0\0\0\0???Iޮ??M?5??Gr?Sۘ??_mv?>+??\\??W???<\0w9?׊?\0ڤ??,&w?B??lX?.??*(??j?r?*ʌ^:(τ???5+?\\?kd?,:???V,e?}?:?p)??n1ɍ1?J\"?)8$??#\Zc\n:c!??´h?/?Sj??~?_!Il?2q?????GgEEJ??sV?\0|?k\\?r????e??\0@\0\0\0\0\0\0\0M??=#L?iy??F??Qț???V9??J???N??K??NՑ?N?֝Jh?	?M??I?M2????oj????o?;UU??O??}S? A?oj????o?;WS??O??}S? ???*me??e??G$t????ݒ3Rp?]6\'J!!aY?Š????V?Q9ju}<?Kz\'D?U?귨??DA?X????M??W??>??w?fL\0&!ﺬ?į?f>??w????0?dC?uY??_??????7q1??d??&u???1??e2?F??????݇$??T?=\\?ڽ-?ktW??7??[7?L??r?????v???C?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 'ijhrjjd;piouherjs\r\n657379263528', 57);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namee` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ROLE` varchar(50) NOT NULL,
  `urll` varchar(200) NOT NULL,
  `sll` varchar(30) NOT NULL,
  `actv` tinyint(1) NOT NULL,
  `ressetpass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `namee`, `email`, `password`, `code`, `ROLE`, `urll`, `sll`, `actv`, `ressetpass`) VALUES
(57, 'sultan', 'sultanaldfere367@gmail.com', 'Xg3j!mFwSQfXPSX', 'dddc4b839bc3aef848f689e5676523d6', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 1, 'passup'),
(58, 'sultan', 'sultanaldfere387368767@gmail.com', '0', 'f5b71c7d1c9285ac5bb994608f615e09', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 1, 'npass'),
(60, '', '', '0', 'f5b71c7d1c9285ac5bb994608f615e09', '', '', '', 0, 'npass'),
(61, 'sultan', 'example@gmail.com', 'Xg3j!mFwSQfXPSX', 'd5445288950249d8bb07d1592b26e073', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(62, 'sultan', 'sultanaldfere360695@gmail.com', 'Xg3j!mFwSQfXPSX', 'e87c714ebc5423c9d5aae1a325ac3188', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(63, 'sultan', 'sultanaldfere367@gmjail.com', 'Xg3j!mFwSQfXPSX', '8830d09fdaee72f9192d5b7dfbf6558e', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(64, 'sultan', 'sultanaldfere374867@gmail.com', 'Xg3j!mFwSQfXPSX', 'b92bf59c0f320b36fe2201babadca8fa', 'ADMIN', 'https://www.google.com/maps/place/', 'حفر الباطن', 0, 'npass'),
(65, 'sultan', 'sultanaldfere_367@gmail.com', 'Xg3j!mFwSQfXPSX', 'bc2dfb30c84ead9c5aa2c165e7230c80', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(66, 'sultan', 'sultanaldfere368747@gmgail.com', 'Dd1800', '3ea5e96a9b3b536da2e299cff7870c84', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(67, 'sultan', 'sultanaldfere347867@gmail.com', 'Xg3j!mFwSQfXPSX', 'df5523d3a64c721db063dbd794c02fb8', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(68, 'sultan', 'sultanaldfere367@gmail.com%', 'Dd1800', '18689c209c9bb9cf7e9e3a7378705dca', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(69, 'sultan', 'sultanaldfere367@gmail.com*%', 'Xg3j!mFwSQfXPSX', '896be3cafd6273901f6fe8426e33ffec', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(70, 'sultan', 'sultanaldfere347867@gmail.com%^', 'Dd1800', '08766ee3fddfb86064ef8f0b7da837e1', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(71, 'sultan', 'sultanaldfere367@gmail.com%&^', 'Xg3j!mFwSQfXPSX', 'b7e545d4a450f2915c364f8d8455cf05', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(72, 'sultan', 'sultanaldfere3658967@gmail.com', 'Xg3j!mFwSQfXPSX', '0831d7e7d3037974e896ce33a6dfa012', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(73, 'sultan', 'sultanaldfere58787367@gmail.com', 'Xg3j!mFwSQfXPSX', '997eeffd0afd046c6f20c8fe1b7eb065', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(74, 'sultan', 'sultanaldfere676367@gmail.com', 'Xg3j!mFwSQfXPSX', '412460b889cf33c67403675e84eb01a9', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(75, 'sultan', 'sultanaldfer676e367@gmail.com', 'Xg3j!mFwSQfXPSX', '74436ce6e32fee3f4565cbd03fecc912', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(76, 'sultan', 'sultanaldfere365767@gmail.com', 'Xg3j!mFwSQfXPSX', '52cb6c70fa87030b50bce44a074ddc9d', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(77, 'sultan', 'sultanaldfere365677@gmail.com', 'Ss123', '85cbda6f4405c1499ff43052a3f52807', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(78, 'sultan', 'sultanaldfere3765467@gmail.com', 'Dd56536', '2178a9ea1fde1a5c55e9ca7eb74e7f35', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(79, 'sultan', 'sultanaldfere3676832@gmail.com', 'Dd5432', '1973ef2c26fd15b4c8c6bc5a7975d9d6', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass'),
(80, 'sultan', 'sultanaldfere367764@gmail.com', 'Ss123', '63b3f4a55a256fe3c3d3a9de9890e50d', 'ADMIN', 'https://www.google.com/maps/place/%D8%B3%D9%8A%D9%87%D8%A7%D8%AA%E2%80%8E%E2%80%AD/@26.4840728,50.0277578,13z/data=!3m1!4b1!4m6!3m5!1s0x3e49fe33c7c3e29b:0x77c3c8962de00286!8m2!3d26.4889127!4d50.028201', 'حفر الباطن', 0, 'npass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ky`
--
ALTER TABLE `ky`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `userr` (`userr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ky`
--
ALTER TABLE `ky`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `ky`
--
ALTER TABLE `ky`
  ADD CONSTRAINT `ky_ibfk_1` FOREIGN KEY (`userr`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
