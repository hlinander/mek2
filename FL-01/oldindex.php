<?php
include '../head.php';
?>
<body>
<h1> Föreläsning 01 </h1>
<h2> Stelkropps rörelse </h2>
<p>
En stel kropp består är ett partikelsystem där avstånden mellan alla punkter är fixerade. 
I detta inledande kapitel betraktar vi dessutom  en idealiserad kropp som befinner sig 
och rör sig i ett enda (2D) plan.  Rörelsen som bevarar stelkroppen består alltså av.
<em> translation </em> och <em> rotation </em> 

<h3> Translation </h3>
<p> I rektilinjär translation rör sig alla punkter i på parallela linjer; mer
allmänt rör sig alla punkter i kongruenta banor. Denna motsvar de rörelser
vi hittils tittat på.  Matematiskt tecknas detta genom 
transformation 
\[ T_{\vec{a}}(\vec{x} ) = \vec{x} + \vec{a}  \]
</p>
<h3>  Rotation </h3>
<p> Det finns en rotations axel runt vilken alla punkter rör sig. Under förutsätting att
rotationsaxeln är runt $ 0 $ får vi.
\[R_{\vec{0}, \theta}(x \hat{i} + y \hat{j} ) = 
	( x \cos(\theta) - y \sin(\theta) ) \hat{i} + ( x \sin(\theta) + y \cos(\theta) y ) \hat{j} \]
Vi kan därmed teckna $R_{\theta} $ som en 
$ 2 \times 2 $ matris som
\[
R_{\theta} \begin{bmatrix} x \\ y \end{bmatrix}  = 
	\begin{bmatrix}
\cos(\theta) & -\sin(\theta) \\ 
\sin(\theta) & \cos(\theta) 
\end{bmatrix} 
\begin{bmatrix} x \\ y \end{bmatrix} 
\]
 </p>
<h3> Allmän rörelse i planet </h3>
<p> Består av rotation runt origo och translation.  Rotation med vinkel
$ \theta $ runt en given punkt $ \vec{b} $ , tecknat som $ R_{\vec{b}, \theta} $ 
fås genom att  skifta punkten $ \vec{b} $ till origo, utföra rotationen $ R_{\theta} $
sedan återställa skiften. Vi får
\[
R_{\vec{b},\theta} = T_{\vec{b}} \; R_{\theta}  \; T_{-\vec{b} } \]
</p>
<div class="question"> Två massor med mass $ m $ är sammmankopplade 
med en stav av längd $ 2 l $. Mass centrum rör sig med fart
$ v \hat{x} $ och den roterar också med vinkelhastighet $ \omega $
run masscentrum. Under förutsätting att staven ligger längs med
$ \hat{x} $ när $ t = 0 $, skriv ett uttryck för massan som
vid $ t = 0 $ ligger vid $ x = l $. De tre typerna av rörelser
visas i figuren. Vad blir förhållandet mellan $ \omega $, $ v $
och $ l $ i var och en av dessa fall.   </div>
<?php
include '../tail.php'
?>
