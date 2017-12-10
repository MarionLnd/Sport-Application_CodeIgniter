<!DOCtype html>
<html lang= 'fr-FR'>
<head>
	<meta charset="utf-8">
	<TITLE>Rapport de projet</TITLE>
	<?php  echo link_tag('assets/Css/style_rapport.css'); ?>	
</head>
	<body>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">
			<p align=center style="margin-bottom: 0in"><font colOR="#0070c0"><font FACE="Gill Sans MT, serif"><font size=7 style="font-size: 40pt"><B>Application
			WEB d’aide à la gestion d’équipes sportives</B></font></font></font></p>
		<br>
		</p>
		</p>
		<p class="western" style="margin-bottom: 0in">
			<p align=center style="margin-bottom: 0in"><font colOR="#0070c0"><font FACE="Gill Sans MT, serif"><font size=5 style="font-size: 17pt">RAPPORT
			DE PROJET</font></font></font></p>
		<br>
		</p>
		<h1 class="contents-heading-western" align=center style="page-break-before: always">
		<br>
		</h1>
		<h1 class="contents-heading-western" align=center><font size=5>Table des matières</font></h1>

		<p>I. Introduction</p>
			<p><span class="marge">A. Présentation du projet</p>
		<p>II. Développement de l’application</p>
			<p><span class="marge">A. Langages utilisés, première prise de contact d’un Framework et outils utilisés</p>
			<p><span class="marge">B. Gestion des données</p>
			<p><span class="marge">C. Les particularités de mon application</p>
			<p><span class="marge">D. Les problèmes rencontrés</p>
			<p><span class="marge">E. Notions étudiées en cours</p>
		<p>III. Idées, améliorations possibles</p>
		<p>V. Conclusion</p>

		</br></br></br>

		<h1 class="western" style="page-break-before: always">
		I. Introduction</h1>

		<h2 class="margin">A. Présentation du
		projet</h2>

		<p class="western" style="margin-bottom: 0in"><br></p>
		<p class="western" style="margin-bottom: 0in">Nous avions comme projet d’établir une application web, en PHP et MySQL, destinée à la gestion d’évènements sportifs au sein d’un club de sport.</p>
		<p class="western" style="margin-bottom: 0in">L'idée principale est de donner aux entraîneurs la possibilité de créer des événements récurrents (entraînements) ou ponctuels (matchs, compétitions), afin de les communiquer simplement aux membres, et d'en connaître à l'avance les participants.</p>
		<p class="western" style="margin-bottom: 0in"><br></p>
		<p class="western" style="margin-bottom: 0in"><U>Principes généraux et fonctionnalités&nbsp;:</U></p>
		<p class="western" style="margin-bottom: 0in"><br></p>
		<p class="western" style="margin-bottom: 0in">Chaque utilisateur du site est un membre inscrit (nom, prénom, login, password, adresse, mail et avatar)</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Une fois connecté, un	utilisateur peut :</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">Créer une équipe (5 maximum) :
			nom, mot de passe d'inscription, sports, ville, description, mixité,
			logo, photo. Le créateur de l'équipe est automatiquement son
			administrateur.</p>
			<li><p style="margin-bottom: 0in">Chaque utilisateur peut faire
			partie d'une équipe. Pour cela, soit il est invité par
			l'administrateur de l'équipe, soit il connaît le mot de passe
			d'inscription à l'équipe.</p>
			<li><p style="margin-bottom: 0in">L'administrateur peut désigner
			des entraîneurs.</p>
			<li><p style="margin-bottom: 0in">Les entraîneurs gèrent le
			calendrier du club en ajoutant des événements : entraînements et
			compétitions. Un événement a un début, une fin, une périodicité
			éventuellement, un lieu, une description. Ils sont visibles
			uniquement par les membres de l'équipes.</p>
			<li><p style="margin-bottom: 0in">Chaque membre a accès au
			calendrier de ses équipes, et a la possibilité de se déclarer
			présent ou absent pour un événement donné. Il peut également
			consulter la liste des présents/absents.</p>
		</ul>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><U>Les contraintes&nbsp;:</U></p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">
			L'application doit être	codée en utilisant le Framework PHP MVC CodeIgniter et la base de
		données devra utiliser au moins un trigger.
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" align=right style="margin-bottom: 0in">D’après
		<a HREF="http://www.iut-fbleau.fr/sitebp/web/wim21/?p=tp8">http://www.iut-fbleau.fr/sitebp/web/wim21/?p=tp8</a></p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" align=right style="margin-bottom: 0in"><br>
		</p>
		<h1 class="western" style="page-break-before: always"><a NAME="_Toc485949361"></a>
		II. Développement de l’application</h1>
		<h2 class="western" style="margin-left: 0.25in">	A. Langages
		utilisés, première prise de contact d’un Framework et outils
		utilisés</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Pour ce projet, nous
		devions développer une application web, ce qui signifiait,
		programmer du côté serveur. Pour ce faire, j’ai programmé cette
		application&nbsp;:</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">En PHP&nbsp;: afin de pouvoir
			gérer la partie dynamique du site, qui interagirait avec le client
			et la base de données.</p>
		</ul>
		<p style="margin-left: 0.5in; margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">En MySQL&nbsp;: en utilisant
			l’interface web de gestion de base de données PhpMyAdmin afin de
			pouvoir organiser les données de chaque utilisateur et chaque
			fonctionnalité nécessitant une interaction avec la base donnée.</p>
		</ul>
		<p style="margin-left: 0.5in; margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">En utilisant le Framework
			CodeIgniter&nbsp;: un Framework fournit avec plusieurs bibliothèques
			et helpers afin de pouvoir faciliter l’écriture du code et
			quelques fonctionnalités.</p>
		</ul>
		<p style="margin-left: 0.5in; margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">En html et CSS&nbsp;: afin de
			pouvoir gérer la partie visuelle de l’application</p>
		</ul>
		<p style="margin-left: 0.5in; margin-bottom: 0in"><br>
		</p>
		<h2 class="western" style="margin-left: 0.25in"><a NAME="_Toc485949363"></a>
		B. Gestion des données</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Afin de pouvoir gérer
		les données entrantes dans cette application, il a fallu préparer
		une base de données. Dans un premier temps, j’avais pensé à&nbsp;faire
		une base de données de ce type&nbsp;: 
		</p>
		<p class="western" style="margin-bottom: 0in">	</p>
		<p class="western" style="margin-bottom: 0in">	<img SRC="<?php echo base_url()."./assets/Images/Diagramme_BD.PNG"?>" NAME="Image 3" align=BOTTOM WIDTH=698 HEIGHT=570 BORDER=0>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Finalement, ma base de
		données finale est&nbsp;:</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><img SRC="<?php echo base_url()."./assets/Images/BD_finale.PNG"?>" NAME="Image 5" align=BOTTOM WIDTH=768 HEIGHT=524 BORDER=0></p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">L’utilisateur est une
		personne qui, dès son arrivée sur le site, peut s’inscrire ou se
		connecter s’il a déjà créé son compte. 
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Par la suite, j’ai
		considéré que pour qu’un utilisateur devienne un membre, il
		fallait qu’il ait soit&nbsp;:</p>
		<ul>
			<li><p style="margin-bottom: 0in">Créé une équipe</p>
			<li><p style="margin-bottom: 0in">Intégré une équipe</p>
		</ul>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Ainsi, dès qu’il a
		effectué une de ses actions, il est inséré dans la table Membre,
		contenant deux attributs permettant de le distinguer&nbsp;: entre le
		statut de membre, d’administrateur ou d’entraineur. Ces deux
		attributs sont des booléens que je mets à la valeur «&nbsp;true&nbsp;»
		lors le membre créé une équipe ou est désigné en tant
		qu’administrateur.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Les tables Admin et
		Entraineur auraient dû être référencées à celle de Membre, en
		fonction des attributs indiquant le statut du membre.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Dans la table
		Invitation, gérant les invitations reçues ou envoyées, il y a les
		attributs&nbsp;:</p>
		<ul>
			<li><p style="margin-bottom: 0in">LoginAdmin&nbsp;: prenant le login
			de l’administrateur envoyant l’invitation.</p>
			<li><p style="margin-bottom: 0in">LoginMembreInvité&nbsp;: prenant
			le login du membre recevant l’invitation.</p>
			<li><p style="margin-bottom: 0in">NomEquipe&nbsp;: prenant le nom de
			l’équipe concernée par l’invitation.</p>
		</ul>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Les tables Evènements
		et Calendrier prennent des attributs propres aux consignes données
		pour le projet, cependant je n’ai pas pu approfondir cette
		réflexion car je n’ai pas pu aboutir à cette partie du projet.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">La table Equipe
		contient aussi tous les attributs nécessaires au fonctionnement de
		l’application, à partir des consignes données, j’ai cependant
		ajouté les attributs&nbsp;:</p>
		<ul>
			<li><p style="margin-bottom: 0in">LoginAdmin&nbsp;: afin de pouvoir
			utilisé le login de l’administrateur dans certaines fonctions le
			nécessitant</p>
			<li><p style="margin-bottom: 0in">LoginMembre&nbsp;: avec pour
			objectif d’afficher tous les membres propres à une équipe grâce
			à cet attribut.</p>
		</ul>
		<h2 class="western"><br>
		</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>


		<h2 class="western" style="margin-left: 0.25in">
		C. Les particularités de mon application</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Malgré le fait que je
		n’ai pu aboutir à la fin de ce projet, j’ai tout de même fait
		certains choix quant au fonctionnement de cette application&nbsp;:</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">Cette application a deux
			«&nbsp;espaces&nbsp;» principaux&nbsp;: tout d’abord l’espace
			Membre, dans lequel un membre peut voir ses informations
			personnelles, les équipes auxquelles elle appartient ou qu’elle a
			créées, consulter les possibles invitations à joindre une équipe,
			rejoindre une équipe en connaissant le mot de passe de celui-ci et
			finalement créer une équipe. Et enfin l’espace Equipe,
			accessible uniquement si l’on appartient ou l’on a créé une
			équipe, car il est accessible en consultant ses équipes dans la
			rubrique dédiée à cette action dans l’espace Membre, ainsi
			l’espace Equipe contient les informations de l’équipe, le
			calendrier de son équipe, les événements de cette équipe et
			enfin la liste des membres de celle-ci.</p>
		</ul>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">Lors de la création d’une
			équipe, j’ai souhaité faire en sorte qu’en fonction du sport
			de l’équipe concernée, lorsque l’on arrive sur l’Espace
			Equipe, le fond des pages soit en rapport avec le sport choisi&nbsp;:
			par exemple si une équipe faisait du basket, le fond serait en
			rapport avec le basket, et tous les membres appartenant à cette
			équipe verrait ce fond, tandis que si une autre équipe faisait le
			baseball, le fond serait en rapport avec le baseball.</p>
		</ul>
		<p style="margin-left: 0.5in; margin-bottom: 0in"><U><B>Contrainte</B></U>&nbsp;:
		Lors de la création de l’équipe, les sports étaient donc
		imposés, le membre ne pouvait pas forcément créer une équipe
		pratiquant le sport qu’il souhaitait.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>


		<h2 class="western" style="margin-left: 0.25in">D. Les problèmes
		rencontrés</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Comme je l’ai dit
		précédemment, je n’ai pas pu aboutir à la fin de ce projet car
		je pense avoir mal gérer le temps qui nous été imparti, d’autant
		plus que j’étais seule, je n’ai pas assez fourni de temps sur ce
		projet, une erreur que je comprends mieux et que j’essaierai de ne
		plus reproduire à l’avenir. Il est vrai que je souhaitais plus
		être seule qu’en binôme car je souhaitais tester mes capacités
		sur un projet de ce type car le WEB est un domaine qui m’intéresse
		beaucoup dans l’informatique.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Le Framework
		CodeIgniter paraissait compliqué à appréhender, mais finalement
		après plusieurs explications et un exemple concret à travers un TP
		fait en classe, le plus gros problème auquel j’ai pu faire face
		est l’interaction entre la base de données et le contrôleur,
		surtout dans le modèle, pour la récupération de requêtes SQL
		effectuées.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">J’ai eu un gros
		problème vers la fin avec la gestion des sessions pour les équipes,
		car lorsque je souhaitais afficher les informations de l’équipe
		concernées, pour un membre étant dans plusieurs équipes, les
		informations n’étaient pas correctes et correspondaient aux
		informations de la première équipe de la liste des équipes dans
		l’espace membre.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Toujours dans un
		problème de gestion de temps, je pense avoir passé beaucoup plus de
		temps sur la mise en page et le CSS que je ne l’aurais dû&nbsp;:
		j’aurais pu optimiser ce temps pour gérer le fonctionnement de
		l’application en elle-même.</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">J’ai aussi beaucoup
		fait de fautes d’inattentions, ce qui me fait souvent perdre du
		temps, car je pouvais chercher longtemps une erreur, en modifiant,
		annulant, rétablissant à nouveau beaucoup de bouts de code alors
		qu’il s’agissait tout simplement d’un oubli de point-virgule,
		ou bien de majuscule, des fautes dans les noms de variables, de vues
		ou de fonctions, etc.</p>
		<h2 class="western">	</h2>


		<h2 class="western" style="text-indent: 0.49in"><a NAME="_Toc485949366"></a>
		E. Notions étudiées en cours</h2>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>


		<TABLE WIDTH=769 CELLPADDING=7 CELLSPACING=0>
			<col WIDTH=377>
			<col WIDTH=362>
			<tr Valign=TOP>
				<td WIDTH=377 HEIGHT=3 style="border-top: 1px solid #b2a1c7; border-bottom: 1.50pt solid #b2a1c7; border-left: 1px solid #b2a1c7; border-right: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a"><B>Ce que
					j’ai pu développer</B></font></p>
				</td>
				<td WIDTH=362 style="border-top: 1px solid #b2a1c7; border-bottom: 1.50pt solid #b2a1c7; border-left: 1px solid #b2a1c7; border-right: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a"><B>Ce que
					j’ai vu en cours</B></font></p>
				</td>
			</tr>
			<tr Valign=TOP>
				<td WIDTH=377 HEIGHT=71 BGcolOR="#e5dfec" style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center style="margin-bottom: 0in"><br>
					</p>
					<p class="western" align=center><font colOR="#5f497a"><B>Création
					et interaction avec une base de données</B></font></p>
				</td>
				<td WIDTH=362 BGcolOR="#e5dfec" style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center style="margin-bottom: 0in"><font colOR="#5f497a">SGBD&nbsp;:
					création de tables (CREATE TABLE), insertions (INSERT INTO),
					sélection de données (SELECT FROM), mises à jour (UPDATE)</font></p>
					<p class="western" align=center><font colOR="#5f497a">Et
					l’interaction avec la base de données avec les fonctions
					«&nbsp;mysqli&nbsp;»</font></p>
				</td>
			</tr>
			<tr Valign=TOP>
				<td WIDTH=377 HEIGHT=21 style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a"><span style="font-weight: normal">Création
					des pages web, de l’aspect esthétique de l’application</span></font></p>
				</td>
				<td WIDTH=362 style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a">Utilisation
					du langage html5 et CSS3</font></p>
				</td>
			</tr>
			<tr Valign=TOP>
				<td WIDTH=377 HEIGHT=21 BGcolOR="#e5dfec" style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a"><span style="font-weight: normal">Mémorisation
					de données à travers les pages de l’application</span></font></p>
				</td>
				<td WIDTH=362 BGcolOR="#e5dfec" style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a">Gestion des
					sessions et cookies</font></p>
				</td>
			</tr>
			<tr Valign=TOP>
				<td WIDTH=377 HEIGHT=18 style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a"><span style="font-weight: normal">Gestion
					de l’aspect dynamique du site avec plus d’interactions
					possibles en fonction du client</span></font></p>
				</td>
				<td WIDTH=362 style="border: 1px solid #b2a1c7; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
					<p class="western" align=center><font colOR="#5f497a">Utilisation
					du langage PHP, côté serveur</font></p>
				</td>
			</tr>
		</table>


		<p class="western" align=center style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>


		<h1 class="western"><a NAME="_Toc485949367"></a>III. Idées,
		améliorations possibles</h1>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in">Quelques idées me sont
		venues pour la personnalisation de cette application&nbsp;:</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<ul>
			<li><p style="margin-bottom: 0in">Tout d’abord, j’ai pensé à donner la possibilité à un membre d’envoyer une demande d’intégration à un équipe, qu’il pourrait choisir dans une	liste déroulante, ce qui enverrai une invitation à	l’administrateur de l’équipe choisie, qui choisirait à son	tour d’accepter ou non la demande du membre.</p>
			<li><p style="margin-bottom: 0in">Comme précédemment dit, le changement de fond se fait en fonction du sport de l’équipe.</p>
		</ul>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><a NAME="_GoBack"></a><br>
		</p>


		<h1 class="western"><a NAME="_Toc485949368"></a>IV. Conclusion</h1>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" style="margin-bottom: 0in"><br>
		</p>
		<p class="western" align=justify style="margin-bottom: 0in"><font size=4>
			Ce	projet a été pour moi un des projets les plus intéressants que j’ai pu faire cette année&nbsp;: d’autant plus que le web est le	domaine que
			j'apprécie le plus dans ma formation. Malgré le fait que je n’ai pas pu le finir complétement, j’en garde une belle	expérience, et je pense que je continuerai à tout faire pour le	finir et l’améliorer. 
			Je souhaite vraiment approfondir mes connaissances dans ce domaine.</font></p>
		<p class="western" align=justify style="margin-bottom: 0in"><font size=4>
			J’ai aussi appris, à travers l’élaboration de ce projet, que je peux compter sur l’aide des autres,
			et sur le différent point de vue qu’ils peuvent m’apporter.</font></p>
		<p class="western" align=justify style="margin-bottom: 0in"><font size=4>
			J’ai plus souhaité faire ce projet seule qu’en binôme car je
			souhaitais vraiment que le prochain projet en web que nous aurions à
			faire soit pour moi, une épreuve afin de pouvoir tester mes
			capacités et voir ce que je peux valoir.
		</font></p>
		<p class="western" align=justify style="margin-bottom: 0in"><font size=4>
			Je suis assez contente d’avoir pu créer cette application de
			moi-même, avec aussi de l’aide de mes camarades, ce qui m’a fait
			réaliser qu’il est très important de pouvoir faire confiance,
			oser demander de l’aide et ainsi prendre en compte l’avis des
			autres car il est essentiel d’être ouvert au points de vue et aux
			idées des autres, de plus j’ai pu comprendre beaucoup de notions
			qui étaient vagues lorsque j’étais seule à essayer de
			comprendre.
	</font></p>
		<div type=footer>
			<p align=center style="margin-bottom: 0in">DUT INFO1		Marion LUNDI</p>
		</div>
	</body>
</html>