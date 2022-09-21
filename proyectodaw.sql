-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 01:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectodaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `texto` varchar(1000) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `fk_id_series` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id_series` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `genero` enum('ciencia_ficcion','drama','comedia','fantasia','terror/misterio') NOT NULL,
  `puntuacion` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id_series`, `titulo`, `descripcion`, `poster`, `genero`, `puntuacion`) VALUES
(1, 'American Horror Story', 'Serie estadounidense de antología y horror creada por Ryan Murphy y Brad Falchuk para la cadena de cable FX. Cada temporada se concibe como una miniserie autónoma, siguiendo un conjunto diferente de personajes y escenarios, y un argumento con su propio «principio, medio y fin». La serie atrae constantemente altas audiencias para el canal FX, siendo su primera temporada la nueva serie de cable más vista de 2011.', 'AmericanHorrorStory.jpg', 'terror/misterio', '1'),
(2, 'Los Anillos de Poder', 'Inspirada en el universo de las obras de J. R. R. Tolkien, desarrollada por J.D. Payne y Patrick McKay para el servicio de streaming Prime Video, y ambientada en la Segunda Edad de la Tierra Media, antes de los acontecimientos de la novela y las películas de la trilogía de El Señor de los Anillos. Producida por Amazon Studios, en colaboración con Tolkien Estate and Trust, HarperCollins y New Line Cinema, contó con la dirección de Juan Antonio Bayona (dos episodios), Wayne Yip (cuatro episodios) y Charlotte Brändström (dos episodios) en su primera temporada.', 'anillosDePoder.jpg', 'fantasia', '1'),
(3, 'Juego de Tronos', 'Serie de drama y fantasía medieval desarrollada por David Benioff y D. B. Weiss y producida por la cadena HBO. Su argumento está inspirado en la serie de novelas Canción de hielo y fuego, escrita por el estadounidense George R. R. Martin, y relata las vivencias de un grupo de personajes de distintas casas nobiliarias en el continente ficticio de Poniente para tener el control del Trono de Hierro y gobernar los siete reinos que conforman el territorio.', 'JuegoDeTronos.jpg', 'fantasia', '1'),
(4, 'La Casa del Dragón ', 'Serie dirigida por Clare Kilner, Geeta Patel, Miguel Sapochnik y Greg Yaitanes. El guion ha sido escrito por Ryan Condal, George R. R. Martin y Miguel Sapochnik y producida por HBO Se estrenó el 21 de agosto de 2022. La primera temporada que consta de diez episodios está protagonizada por Eve Best, Paddy Considine, Olivia Cooke, Emma D\'Arcy, Rhys Ifans y Matt Smith.', 'LaCasaDelDragon.jpg', 'fantasia', '1'),
(5, 'Breaking Bad', 'Creada y producida por Vince Gilligan, narra la historia de Walter White (Bryan Cranston), un profesor de química con problemas económicos a quien le diagnostican un cáncer de pulmón inoperable. Para pagar su tratamiento y asegurar el futuro económico de su familia, comienza a cocinar y vender metanfetamina,4​ junto con Jesse Pinkman (Aaron Paul), un antiguo alumno suyo. La serie, ambientada y producida en Albuquerque (Nuevo México), se caracteriza por sus escenarios desérticos y por la tendencia en la historia de poner a sus personajes en situaciones que aparentemente no tienen salida, lo que llevó a que su creador la describa como un wéstern contemporáneo.', 'BreakingBad.jpg', 'drama', '1'),
(6, 'Westword', 'serie de televisión de ciencia ficción distópica creada por Jonathan Nolan y Lisa Joy. Producida por HBO, se basa en la película del mismo nombre de 1973 (escrita y dirigida por Michael Crichton) y, en menor medida, en la secuela de 1976 de la película, Futureworld. La historia comienza en Westworld, un parque de atracciones ficticio y tecnológicamente avanzado con temática del Viejo Oeste poblado por androides «anfitriones». El parque atiende a «invitados» que pagan mucho dinero (40.000$ al día) y que pueden satisfacer sus fantasías más salvajes dentro del parque sin temor a represalias de los anfitriones, a quienes su programación les impide dañar a los humanos. Más tarde, la trama de la serie se expande al mundo real, a mediados del siglo XXI, donde las vidas de las personas son llevadas y controladas por una poderosa inteligencia artificial llamada Roboam (Rehoboam).', '	\r\nWestword.jpg', 'ciencia_ficcion', '1'),
(7, 'Friends', 'Serie de televisión estadounidense creada y producida por Marta Kauffman y David Crane. Se emitió por primera vez el 22 de septiembre de 1994 por la cadena NBC y duró hasta el 6 de mayo de 2004. La serie trata sobre la vida de un grupo de amigos —Chandler Bing, Phoebe Buffay, Monica Geller, Ross Geller, Rachel Green y Joey Tribbiani— que residen en Manhattan, Nueva York. Suceden tanto buenos como malos momentos, pero con una crítica cómica a los hechos más trascendentales de la actualidad. Inmediatamente después del éxito en su país, el programa comenzó su difusión por todo el mundo con similares resultados.', 'Friends.jpg', 'comedia', '1'),
(8, 'Better Call Saul', 'Ambientada entre principios y mediados de la década de 2000, la serie sigue la historia de Jimmy McGill (interpretado por Bob Odenkirk), un estafador recientemente convertido en abogado y que posteriormente sería conocido como Saul Goodman. La serie comienza seis años antes de los eventos de Breaking Bad y muestra la transformación de McGill de ex-estafador de poca monta hasta convertirse en el abogado y criminal Saul Goodman, uno de los personajes principales de Breaking Bad. McGill se convierte en el abogado del expolicía Mike Ehrmantraut (Jonathan Banks), cuyas habilidades le permiten ingresar al inframundo criminal del narcotráfico en Albuquerque (Nuevo México).', 'BetterCallSaul.jpg', 'drama', '1'),
(9, 'Stranger Things', 'serie de televisión web estadounidense de suspenso y ciencia ficción coproducida y distribuida por Netflix. Escrita y dirigida por los hermanos Matt y Ross Duffer, y producida ejecutivamente por Shawn Levy, se estrenó en la plataforma Netflix el 15 de julio de 2016. La serie recibió críticas positivas por parte de la prensa especializada, que elogió la interpretación, caracterización, ritmo, atmósfera y el claro homenaje al Hollywood de la década de los ochenta, con referencias a películas de Steven Spielberg, Wes Craven, John Carpenter, Stephen King, Rob Reiner y George Lucas, entre otros, incluyendo varias películas, anime y videojuegos.', 'StrangerThings.jpg', 'ciencia_ficcion', '1'),
(10, 'Sandman', 'Serie de historietas escrita por Neil Gaiman e ilustrada por una amplia gama de artistas de variados estilos, limitados hacia arcos argumentales o episodios sueltos, publicada por DC Comics. Además del cocreador Sam Kieth, otros ilustradores que participaron incluyen a Colleen Doran, Mike Dringenberg, Marc Hempel, Miguelanxo Prado, Kelley Jones, Jill Thompson, Yoshitaka Amano y Michael Zulli. La serie consistió en 75 números, publicándose su primer número en Estados Unidos en enero de 1989, y el último en marzo de 1996.', 'Sandman.jpg', 'fantasia', '1'),
(11, 'Dark', 'Serie de televisión web alemana de suspenso y ciencia ficción creada por Baran bo Odar y Jantje Friese. Situada en la ficticia ciudad de Winden (Alemania), Dark sigue las secuelas de la desaparición de un niño que expone los secretos y las conexiones ocultas entre cuatro familias mientras desentrañan lentamente una siniestra conspiración de viaje en el tiempo que abarca tres generaciones. A lo largo de la serie, Dark explora las implicaciones existenciales del tiempo y sus efectos sobre la naturaleza humana.', 'Dark.jpg', 'ciencia_ficcion', '1'),
(12, 'Cómo conocí a vuestra madre', 'How I Met Your Mother (Cómo conocí a tu madre en Hispanoamérica, Cómo conocí a vuestra madre en España) es una comedia de situación estadounidense creada por Craig Thomas y Carter Bays, estrenada en la CBS el 19 de septiembre de 2005 y finalizada el 31 de marzo de 2014. Está protagonizada por Josh Radnor, Neil Patrick Harris, Cobie Smulders, Alyson Hannigan y Jason Segel. La serie es emitida en Estados Unidos por la cadena CBS y Comedy Central, en Hispanoamérica por Sony Entertainment Television, en Chile fue transmitida por Chilevisión y en España por Neox, FOX y Comedy Central España.', 'HIMYM.jpg', 'comedia', '1'),
(13, 'The Big Bang Theory', 'La serie comienza con la llegada de Penny, aspirante a actriz, al apartamento vecino del que comparten Sheldon y Leonard, dos físicos que trabajan en el Instituto Tecnológico de California (Caltech). Leonard se enamora desde el primer momento de Penny. Leonard y Sheldon son científicos destacados en Caltech, amigos a su vez de Howard y Raj, que son presentados como unos completos geeks, alejados de las inquietudes y problemas de la gente común. En el curso de la serie se muestra la dificultad de los protagonistas masculinos para relacionarse con personas de fuera de su entorno, principalmente de sexo femenino, dando lugar a situaciones cómicas.', 'TBBT.jpg', 'comedia', '1'),
(14, 'The Good Place', 'La serie se centra en Eleanor Shellstrop (Kristen Bell), una joven recién fallecida que se despierta en la otra vida y es enviada por Michael (Ted Danson) al «lado bueno», una utopía parecida al cielo que él mismo diseñó en recompensa a una vida terrenal justa. Sin embargo, rápidamente se da cuenta de que fue enviada allí por error y debe ocultar su comportamiento moralmente imperfecto y tratar de convertirse en una mejor persona. La comedia está coprotagonizada por William Jackson Harper, Jameela Jamil y Manny Jacinto como otros residentes del «lado bueno», junto con D\'Arcy Carden como un ser artificial que ayuda a los habitantes.', 'TheGoodPlace.jpg', 'comedia', '1'),
(15, 'The Mandalorian', 'The Mandalorian tiene lugar «después de la caída del Imperio y antes de la aparición de la Primera Orden», cinco años después de los acontecimientos narrados en Return of the Jedi y sigue a «un pistolero solitario en los confines de la galaxia, lejos de la autoridad de la Nueva República».La historia se sitúa en el pueblo ficticio de Hawkins, en el estado Indiana, Estados Unidos, durante los años ochenta, cuando un niño de doce años llamado Will Byers desaparece misteriosamente. Poco después, Eleven (Once, en español), una niña aparentemente fugitiva y con poderes telequinéticos, se encuentra con Mike, Dustin y Lucas, amigos de Will, y los ayuda en la búsqueda del mismo', 'TheMandalorian.jpg', 'ciencia_ficcion', '1'),
(16, 'El libro de Boba Fett', 'Serie de televisión estadounidense creada para el servicio de streaming Disney+. Es parte de la franquicia Star Wars y un spin-off de The Mandalorian que presenta al cazarrecompensas Boba Fett de esa serie y otros medios de esa franquicia. La serie se estrenó el 29 de diciembre de 2021.\r\nEs protagonizada por Temuera Morrison interpretando a Boba Fett, y Ming-Na Wen interpretando a Fennec Shand, ambos repitiendo sus papeles de The Mandalorian. Se hicieron varios intentos para desarrollar una película independiente de Star Wars centrada en Boba Fett antes de que Lucasfilm comenzara a priorizar el desarrollo de su serie de streaming, The Mandalorian. Morrison apareció como Fett junto a Wen en la segunda temporada de The Mandalorian, y una posible serie derivada se informó por primera vez en noviembre de 2020. El libro de Boba Fett se anunció oficialmente en diciembre de 2020 en la escena post-crédito del último capítulo de la segunda temporada de The Mandalorian.', 'ElLibroDeBobaFett.jpg', 'ciencia_ficcion', '1'),
(17, 'Black Mirror', 'Serie de televisión antológica británica de ciencia ficción distópica/costumbrista creada por Charlie Brooker.Descrita por su productora como «un híbrido de The Twilight Zone y Relatos de lo inesperado que se nutre de nuestro malestar contemporáneo sobre nuestro mundo moderno» la serie se caracteriza por presentar relatos distópicos autoconclusivos que muestran generalmente un sentimiento de «tecno-paranoia» y analizan cómo la tecnología afecta al ser humano.', 'BlackMirror.jpg', 'ciencia_ficcion', '1'),
(18, 'Perdidos', 'El vuelo 815 se estrella en una isla desierta, exuberante y misteriosa. Enseguida, los sobrevivientes deben encontrar la forma de adaptarse al nuevo ambiente, a la vez que descubren un extraño sistema de seguridad, refugios subterráneos y un violento grupo de supervivientes.', 'Perdidos.jpg', 'terror/misterio', '1'),
(19, 'Dexter', 'Dexter Morgan un experto en salpicaduras de sangre que reside en Miami, no resuelve solamente casos de asesinato sino que también los comete. De hecho, él es un asesino en serie que únicamente mata a los culpables, justificando así sus acciones y su estilo de vida. Su hermana, una policía y sus colegas policías no tienen idea que Dexter tiene una vida doble, aunque su padre adoptivo, Harry conoce su secreto y de hecho le ayuda a mejorar sus \"habilidades\". Es una forma de justicia única en la cual el encantador Dexter se siente ávido de llevarla a cabo.', 'Dexter.jpg', 'terror/misterio', '1'),
(20, 'Peaky Blinders', 'Gran Bretaña vive la posguerra. Los soldados regresan, se acuñan nuevas revoluciones y nacen bandas criminales en una nación agitada. En Birmingham, una pandilla de gánsters callejeros asciende hasta convertirse en los reyes de la clase obrera.', 'PeakyBlinders.jpg', 'drama', '1'),
(21, 'House', 'En el Princenton Plainsboro de Nueva Jersey, el Dr. Gregory House, un singular genio de la medicina, se encarga de resolver casos como lo haría Sherlock Holmes. De forma astuta juega con la psicología de la Dra. Lisa Cuddy, su mejor amigo, el oncólogo James Wilson, y del resto de su equipo de trabajo.', 'House.jpg', 'drama', '1'),
(22, 'Prision Break', 'Michael Scofield es un hombre desesperado en una situación desesperada. Su hermano, Lincoln Burrows fue condenado a muerte por un crimen que no cometió y está esperando que se lleve a cargo su sentencia. Michael asalta un banco para poder entrar a la cárcel y estar junto a su hermano en la Penitenciaría Estatal Fox River, luego pone en funcionamiento sus planes elaborados para que Lincoln escape y pueda probar su inocencia.', 'PrisionBreak.jpg', 'drama', '1'),
(23, 'Gossip Girl', 'El bachillerato ha culminado para los ex alumnos privilegiados de la exclusiva secundaria en la parte alta Este de Manhattan, pero Gossip Girl sigue compartiendo exclusivas en mensajes de texto de los escándalos y las vicisitudes. Mientras los graduados se embarcan hacia el futuro y los nuevos estudiantes llegan a Constance Billard, Gossip Girl continúa creando polémica e informando los posibles escándalos y la identidad de Gossip Girl sigue siendo un misterio.', 'GossipGirl.jpg', 'drama', '1'),
(24, 'Las escalofriantes aventuras de Sabrina', 'Chilling Adventures of Sabrina es una serie de televisión web estadounidense de misterio sobrenatural desarrollada por Roberto Aguirre-Sacasa para Netflix, basada en la serie de cómics homónima. La serie es producida por Warner Bros. Television, en asociación con Berlanti Productions y Archie Comics. Aguirre-Sacasa y Greg Berlanti sirven como productores ejecutivos, junto a Sarah Schechter, Jon Goldwater y Lee Toland Krieger.', 'Sabrina.jpg', 'terror/misterio', '1'),
(25, 'La maldición de Hill House', 'La maldición de Hill House es una serie de televisión web estadounidense de horror sobrenatural creada y dirigida por Mike Flanagan, producida por Amblin Television y Paramount Television, para Netflix, y sirve como la primera temporada de la serie de antología The Haunting.', 'HillHouse.jpg', 'terror/misterio', '1'),
(28, 'Barry', 'Barry es un asesino a sueldo que descubre su vocación de actor durante una misión en Los Angeles. A partir de ahí tendrá que decidir si debe dedicarse a lo que se le da bien pero no le motiva, o dejarse llevar por su sueño y meterse en el mundillo de la interpretación.', 'Barry.jpg', 'comedia', '1'),
(30, 'The Walking Dead', 'Basado en la historieta escrita por Robert Kirkman, este drama crudo describe las vidas de un grupo de sobrevivientes que está siempre en movimiento en busca de un hogar seguro durante las semanas y meses de un apocalipsis zombi. Sin embargo, la presión de estar con vida cada día, lleva a algunos del grupo a la crueldad profunda de cada ser humano y descubren que el miedo abrumador puede ser más mortal que los zombis que caminan a su alrededor. Los conflictos interpersonales pueden representar una amenaza mayor para su supervivencia que los caminantes que deambulan por las calles.', 'TWT.jpg', '', '1'),
(31, 'The Office', 'La adaptación de Estados Unidos, localizada en Scranton, Pensilvania., es la de una compañía papelera de alguna forma un poco más dinámica que la versión original Británica, aunque los personajes son esencialmente los mismos, desde Michael Scott, el peor jefe de todos hasta un hombre cualquiera Jim, enamorado de la recepcionista Pam a quien él le coquetea cuando no está preocupado por atormentar a su compañero Dwight, un hombre muy excitable y adulón.', 'TheOffice.jpg', 'comedia', '1'),
(33, 'Rick y Morty', 'Comedia animada que narra las aventuras de un científico loco, Rick Sánchez, que regresa después de 20 años para vivir con su hija, su marido y sus hijos, Morty y Summer. Rick acaba de mudarse a casa de su hija Beth y allí recuerda que tiene un nieto llamado Morty. Sin preguntar a nadie, decide que va a obligarle a que le acompañe a todo tipo de aventuras para que el chico se vuelva inteligente como él y no se convierta en un idiota como su padre.', 'RickAndMorty.jpg', 'ciencia_ficcion', '1'),
(34, 'Ted Lasso', 'Ted Lasso, un entrenador de fútbol de poca monta, es contratado para entrenar a un equipo de fútbol profesional en Inglaterra, a pesar de no tener experiencia como entrenador. La serie se estrenó con los primeros tres episodios en Apple TV+ , fue renovada para una segunda temporada que consta de doce episodios cinco días después de su debut. En octubre de 2020, la serie fue renovada para una tercera temporada.', 'TedLasso.jpg', 'comedia', '1'),
(35, 'Atypical', 'La serie se centra en la vida del chico de 18 años Sam Gardner (Keir Gilchrist), quien tiene un trastorno del espectro autista. La primera temporada fue lanzada el 11 de agosto de 2017, constando de ocho episodios. La serie fue en su mayoría bien recibida por la crítica. El 13 de septiembre de 2017 fue renovada para una segunda temporada que consta de diez episodios y se estrenó el 7 de septiembre de 2018. Una tercera temporada fue confirmada el 24 de octubre de 2018 y lanzada el 1 de noviembre de 2019, la cual consta de diez episodios. En febrero de 2020 se anunció la 4.ª y última temporada de 10 episodios, que se estrenó el 9 de julio de 2021.', 'Atypical.jpg', 'comedia', '1'),
(36, 'Fleabag', '  Una joven de Londres, con dudosas intenciones y sexualmente activa, intenta lidiar con la vida en la gran ciudad mientras acepta una tragedia reciente que le ha cambiado. Esta creada y escrita por Phoebe Waller-Bridge, basado en su monólogo individual presentado por primera vez en 2013.\r\n  La serie se caracteriza porque la protagonista rompe habitualmente la cuarta pared.\r\n  La empatía o rechazo hacia la personalidad de la protagonista es un factor esencial para el gusto personal de esta emisión. En el año 2019 la serie fue galardonada con un Emmy como mejor teleserie de humor. Ese año, Phoebe Waller-Bridge ganó también premio a la mejor guionista y mejor actriz de comedia.', 'Fleabag.jpg', 'comedia', '1'),
(37, 'Élite', 'Narra la vida de un grupo de estudiantes del exclusivo colegio privado \"Las Encinas\", al que llegan tres nuevos alumnos becados de clase obrera, y donde las diferencias entre ricos y humildes dan lugar a un asesinato. La segunda temporada trata sobre la desaparición de un alumno del colegio y la tercera se centra en un nuevo asesinato entre los estudiantes. La cuarta temporada gira en torno a las nuevas reglas del colegio en el nuevo curso con la llegada de un nuevo director. En las cinco temporadas la historia se narra mediante saltos temporales provocados por flashbacks y flashforwards, en donde se mezcla la investigación policial y los hechos ocurridos.', 'Elite.jpg', '', '1'),
(38, 'The Boys', 'The Boys es una serie de superhéroes desarrollada por Eric Kripke para Prime Video. Basada en el cómic del mismo nombre de Garth Ennis y Darick Robertson, sigue al equipo homónimo de justicieros en su lucha contra diversos individuos con superpoderes que abusan de sus habilidades. La serie se estrenó el 26 de julio de 2019.1​ Antes del estreno, Amazon renovó The Boys para una segunda temporada, que se estrenó el 4 de septiembre de 2020, con cada episodio lanzándose semanalmente. La tercera temporada fue estrenada el 3 de junio de 2022, Prime Video emitió los primeros 3 capítulos y luego irían sacando 1 capítulo cada semana.', 'TheBoys.jpg', 'fantasia', '1'),
(39, 'The Witcher', 'Geralt de Rivia es un brujo, mutado durante su infancia para ser más efectivo en su labor, matar monstruos por dinero. El continente se encuentra en un estado de caos debido a las ansias del Imperio de Nilfgaard por ampliar su territorio. Entre los refugiados de esta lucha se encuentra la princesa Cirilla de Cintra, conocida como Ciri, que es constantemente perseguida por Nilfgaard debido al secreto poder que posee. Debido al destino, Geralt y Ciri están unidos para siempre desde antes del nacimiento de esta. Durante sus viajes Geralt conoce a Jaskier, un trovador demasiado hablador, y a Yennefer de Vengerberg, una poderosa hechicera.', 'TheWitcher.jpg', 'fantasia', '1'),
(40, 'Pretty Little Liars', 'Situada en la ciudad ficticia de Rosewood, Pennsylvania, sigue la vida de Alison DiLaurentis (Sasha Pieterse), Spencer Hastings (Troian Bellisario), Hanna Marin (Ashley Benson), Emily Fields (Shay Mitchell), y Aria Montgomery (Lucy Hale). Cuando Alison, la abeja reina del grupo, desaparece, las otras chicas comienzan a recibir una serie de mensajes anónimos amenazando con contar sus secretos, por lo que intentarán desenmascarar a alguien que se hace llamar \"A\".', 'PLL.jpg', 'terror/misterio', '1'),
(41, 'Fear the Walking Dead', '¿Cómo era el mundo mientras se estaba transformando en el horrible apocalipsis presentado en The Walking Dead? Esa pregunta se responde con Fear The Walking Dead, una serie original totalmente nueva ambientada en Los Ángeles, que seguirá a nuevos personajes mientras se enfrentan al comienzo del fin del mundo.', 'FearTWT.jpg', 'terror/misterio', '1'),
(42, 'American Horror Stories', 'Serie de televisión estadounidense de antología y horror, creada por Ryan Murphy y Brad Falchuk que se estrenó en FX on Hulu el 15 de julio de 2021. La producción es una serie derivada de American Horror Story. En agosto de 2021, FX renovó la serie para una segunda temporada, que se estrenó el 21 de julio de 2022.', 'AmericanHorrorStories.jpg', 'terror/misterio', '1');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `password_usuario` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`),
  ADD KEY `fk_id_series` (`fk_id_series`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_series`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id_series` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_id_series` FOREIGN KEY (`fk_id_series`) REFERENCES `series` (`id_series`),
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
