<?php 
include '../../header.php';
?>

<inner-column>
    <page-wrapper>

        <main-resume>
            <section class="resume-title">
                <inner-column>
                    <h1 class="loud-voice">Paul Hazelton</h1>

                    <ul>
                        <li><a href="https://github.com/Hazeltron" class="medium-voice">GitHub</a></li>
                        <li><a href="http://www.linkedin.com/in/paul-hazelton-b35843116" class="medium-voice">LinkedIn</a></li>
                        <li><a href="https://codepen.io/hazeltron/pens/public" class="medium-voice">CodePen</a></li>
                    </ul>
                </inner-column>
            </section>

            <section class="experience">
                <inner-column>
                    <h2 class="attention-voice">Experience</h2>

                    <?php 
                    $json = file_get_contents('../../data-php/resume.json');
                    $details = json_decode($json, true);

                    foreach ($details as $detail) { ?> 
                        <job-detail>
                            <h3 class="strong-voice"><?= $detail['jobTitle'] ?> <span class="medium-voice"><?= $detail['role'] ?></span></h3>
                            <h4 class="calm-strong-voice"><?= $detail['date'] ?></h4>
                            <ul class="calm-voice">
                                <?php foreach ($detail['description'] as $item) { ?>
                                    <?= $item ?>
                                <?php } ?>
                            </ul>
                        </job-detail>
                        
                    <?php } ?>
                   
                </inner-column>
            </section>

        </main-resume>

        <aside>
            <detail-wrapper>

                <contact>
                    <h3 class="calm-strong-voice">Contact</h3>
                    <p class="calm-voice">🏔️ Colorado Springs, Co. 80907</p>
                    <p class="calm-voice">📱 (719)337-0666</p>
                    <p class="calm-voice">📬 paulhazelton.work@gmail.com</p>
                </contact>

                <skills>
                    <h3 class="calm-strong-voice">Skills & ToolKit</h3>
                    <p>Figma, Affinity Designer</p>
                    <p>Visual Design | Design Systems</p>
                    <p>User Testing</p>
                    <p>Familiarity with CMS</p>
                    <p>Collaborative mindset with designers and advertisers</p>
                </skills>

                <languages>
                    <h3 class="calm-strong-voice">Languages & Frameworks</h3>
                    <p>HTML5 | CSS3 | JavaScript | PHP | Vue</p>
                </languages>

                <education>
                    <h3 class="calm-strong-voice">Education</h3>
                    <p>Perpetual Education, Remote</p>
                    <p>Colorado State University, Fort Collins, Co. — Journalism</p>
                </education>

            </detail-wrapper>
        </aside>
    </page-wrapper>
</inner-column>

<?php include '../../footer.php'; ?>