<?php  
	// passthru("git init");
	// passthru("git remote add $project_name $project_git_url");
	passthru("git init");
	passthru("git add .");
	passthru("git commit -m 'descriptivemessage' ");
	passthru("git push origin master ");
	// passthru("git config --global user.name Revlotianize");
	passthru("git status");

	?>