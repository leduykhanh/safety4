<?php
$raMembers = array(
	"name1" => "W. K. Chan",
	"name2" => "Liang Kan Fat",
	"" => ""
);
$raDesignations = array(
	"name1" => "Manager",
	"name2" => "Foreman",
	"" => ""
);
$raSinatures = array(
	"name1" => "chan.png",
	"name2" => "fat.png",
);
$harzard = array(
	"w_h_l_3m"	=> "Hazard -Working at height (less than 3m)",
	"w_h_m_3m"	=> "Working at height (more than 3m)",
	"p_h_s_o"	=> "Physical hazards (sharp objects)",
	"c_h"		=> "Chemical hazards",
	"f_o"		=> "Falling objects",
	"e_h"		=> "Electrical hazard",
	"e_r_h"		=> "Ergonomic hazards",
	"s_t_f_h"	=> "Slip,trip fall",
	"c_s_h" 	=> "Confined space",
	"f_h"		=> "Fire Hazard",
	"g_h"		=> "Gas Hazard",
	"b_w" => "Bad Weather",
	"w_u_q_t" => "Working/unloading with traffic",
	"r_d" => "Reckless driving",
	"h_l_b_m_h" => "Heavy load by manual handling",
	"m_o_u_g" => "material on uneven ground (collapsing)",
	"w_a_h_b" => "Working at height (using boomlift)",
	"w_a_h_s" => "Working at height (using sisscor lift)",
	"w_a_h_sf" => "Working at height (using scaffold)",
	"p_p_f_l_o" => "Poor planning for lfting operation",
	"f_p" => "Flying particles",
	"other" => "Other"
);
$injury =array(
				"0"=>"Fatality",
				"1"=>"Multiple major injuries",
				"2"=>"Damaged to surrounding property",
				"3"=>"Serious bodily injuries",
				"4"=>"Occupational disease",
				"5"=>"Life-threatening occupational disease",
				"6"=>"Minor fractures",
				"7"=>"Deafness",
				"8"=>"Sprains",
				"9"=>"Irritation",
				"10"=>"Minor cuts"
);
$severity = array(
				"0"=>"5",
				"1"=>"5",
				"2"=>"5",
				"3"=>"4",
				"4"=>"4",
				"5"=>"4",
				"6"=>"3",
				"7"=>"3",
				"8"=>"3",
				"9"=>"2",
				"10"=>"2"
);
$existing_risk_control=array(
	"w_h_l_3m" => array(
				"0" => "Donned safety harness with 100% tie off",
				"1" => "Use of portable access platform",
				"2" => "Use of access gangway",
				"3" => "Use of effective safety travel restrain system",
				"4" => "Buddy system to support ladder",
				"5" => "Use of approved scaffold",
				"6" => "Install Edge Protection",
				"7" => "Install Perimeter Guard-Railing",
				"8" => "Use of handrails",
				"9" => "Proper demarcation to be in placed",
				"10" => "Warning signs to be provided",
				"11" => "Use of MEWP",
				"12" => "Training to prevent workers from working outside the railing",
				"13" => "Use of self retracting lifeline and to be above worker head",
				"14" => "Pre inspection of Fall prevention PPE",
				"15" => "Ensure that the free fall distance is sufficient",
				"16" => "Briefing to be conducted before start of work",
				"17" => "WAH personnel to be trained",
				"18" => "Only worker with more than 1 years of relavant experience are allowed to work",
				"19" => "Proper housekeeping to be done periodically"
				),
	"w_h_m_3m" => array(
				"0" => "Donned safety harness with 100% tie off",
				"1" => "Use of portable access platform",
				"2" => "Use of access gangway",
				"3" => "Use of effective safety travel restrain system",
				"4" => "Buddy system to support ladder",
				"5" => "Use of approved scaffold with proper access and egress",
				"6" => "Install Edge Protection",
				"7" => "Install Perimeter Guard-Railing",
				"8" => "Use of handrails",
				"9" => "Proper demarcation to be in placed",
				"10"=> "Opening to be fully covered",
				"11" => "Warning signs to be provided",
				"12" => "Use of MEWP",
				"13" => "Training to prevent workers from working outside the railing",
				"14" => "Use of self retracting lifeline and to be above worker head",
				"15" => "Pre inspection of Fall prevention PPE",
				"16" => "Ensure that the free fall distance is sufficient",
				"17" => "Apply WAH permit to work before start of work",
				"18" => "Briefing to be conducted before start of work",
				"19" => "Emergency Rescue Plan to be briefed to all WAH personnel",
				"20" => "WAH personnel to be trained",
				"21" => "Only worker with more than 1 years of relavant experience are allowed to work",
				),
	"p_h_s_o" => array(
				"0" => "Install barricade",
				"1" => "Remove sharp edges before delivery to site",
				"2" => "Use of insulation covers to prevent direct contact",
				"3" => "Use of hand gloves",
				"4" => "Use of anti cut hand gloves",
				"5" => "Proper safety training to be provided",
				"6" => "Only worker with more than 1 years of relevant experience are allowed to carry out this activity",
				"7" => "Machine inspection to ensure hand guards are not removed",
				"8" => "On site supervision",
				"9" => "Use of machine guards",
				),

	"c_h" => array(
				"0" => "Only trained personnel are allowed to use the chemical",
				"1" => "Understand the hazards of the SDS",
				"2" => "Reduce the use of the chemical",
				"3" => "Chemical to be labelled and hazards briefed",
				"4" => "Use of proper chemical glove",
				"5" => "Proper ventilation to prevent stagnant chemical build up",
				"6" => "Chemical to be stored at proper chemical storage area",
				"7" => "Fire Extinguisher to be provided",
				"8" => "Use of respirator mask",
				"9" => "Use of safety goggles",
				"10" => "Buddy System to be in placed",
				),
	"f_o" => array(
				"0" => "Overhead shelter to be installed",
				"1" => "warning signs to be displayed to warn others of the work above",
				"2" => "Safety net to be provided to catch unintended debris/material",
				"3" => "Hoard up area to prevent personel entering area with falling objects",
				"4" => "To put on safety helmet with chin strap",
				"5" => "Toolbag to store all tools and equipments when working at height",
				"6" => "Attach ropes on all tools used when working at height to prevent falling",
				),
	"e_h" => array(
				"0" => "Use of battery powered equipment",
				"1" => "Only competent personnel are allowed to carry out this work activity",
				"2" => "Implement lock out tag out system",
				"3" => "Isolate the power supply before starting the maintenance",
				"4" => "Licensed electrical worker to inspect the electrical tools/equipment monthly",
				"5" => "Proper maintenance of the electrical tools and equipment",
				"6" => "Use of industrial plug",
				"7" => "Do a test to the power supply to make sure that the power has de energized before starting work",
				"8" => "Do not place electrical tools near or at water source",
				"9" => "use of safety gloves and safety boots",
				),
	"e_r_h" => array(
				"0" => "Proper manual lifting posture to be adopted and practiced",
				"1" => "Use of tools and equipment to assist in the work",
				"2" => "Modify working platform to suit better work posture",
				"3" => "Frequent breaks ",
				"4" => "Constant review of working posture",
				"5" => "Ensure lighting is adequate.",
				"6" => "Proper ventilation are avaliable",
				),
	"s_t_f_h" => array(
				"0" => "Housekeeping- materials/tools/ equipment to be stored at storage area",
                "1" => "Proper cable management - prevent cables from lying around the walkway",
                "2" => "Remove water from wet surface",
                "3" => "Lay anti slip mat on slippery surfaces",
                "4" => "Paint object that are tripping hazard in yellow and black",
                "5" => "Put up signages to warn others about the tripping hazards",
                "6" => "Toolbox to store all tools and equipment",
                "7" => "Container to be provided for storing tools and equipment",
                "8" => "Corden off storage area",
                "9" => "Housekeeping to be done every hour",
				),
	"c_s_h" => array(
				"0" => "Implement permit to work system",
				"1" => "A gas test to be done by a competent confined space safety assessor before entry",
				"2" => "Emergency Response Plan planned and and brief all ",
				"3" => "Mechanical ventilation provided",
				"4" => "Gas test to be done before and 30 minutes after ventilation",
				"5" => "Only 110V Electrical tools/equipment are allowed in the confined space",
				"6" => "Use of calibrated multi gas meter- inspection of certificate before use",
				"7" => "Explosion proof lights to be used in the confined space",
				"8" => "Rescue equipment to be set up before allowing anyone to enter the confined space",
				"9" => "Ventilate confined space till gas reading as safe for entry",
				"10" => "Lock out tag out valves and pumps in the confined space",
				),

	"f_h" => array(
				"0" => "Ensure no incompatible work are carried out",
				"1" => "Fire extinguisher to be readily available with fire watcher",
				"2" => "Place fire blanket on the spark landing area",
				"3" => "Remove all fire hazard material away from work area",
				"4" => "Use of fire resistant jacket",
				"5" => "Inspect the gas cylinder before use",
				"6" => "Ensure gas hoses have no leaks by doing a soap test",
				"7" => "Use of flame arrestor",
				"8" => "Use of gas regulator and check valves",
				),
	"g_h" => array(
				"0" => "SDS of the gas should be understood and briefed",
				"1" => "Proper ventilation to remove gas from building up",
				"2" => "Only trained personnel are to handle the gas",
				"3" => "Use of gas meter to test for leakage of gas",
				"4" => "Testing of leakge using soap test",
				"5" => "Use of gas mask /respirator to prevent inhalation of toxic gas",
				"6" => "Gas meter shall be calibrated and maintained",
				"7" => "Fire Extinguisher to be readily available",
				),
	"b_w" => array (
				"0" => "Stop all outdoor work and seek shelter immediately",
				"1" => "Ensure Lightning protection is available for work area",
				"2"	=> "Ensure proper access and egress to be ready in case of evacuation",
				"3"	=> "provide frequent water breaks",
				"4"	=> "check on workers health status every 1 hour",
				"5"	=> "Ensure worker is wearing N95 mask",
				"6"	=> "Take frequent breaks",
				"7"	=> "Brief workers on the site warning siren",
				"8"	=> "use of lightning@sg mobile app to be informed of weather status",
			),
	"w_u_q_t"	 => array(
				"0" =>	"Set up traffic cones and barrier to demarcate work area",
				"1" =>	"set up warning signs to warn others of the work ahead",
				"2" =>	"traffic controller to slow down traffic or redirect traffic",
				"3" =>	"Hoard up unloading area and redirect traffic",
				"4" =>	"Brief on the risk assessment and SWP",
				"5" =>	"use of truck mounted attenuator to prevent vehicle from crashing into work area",
				"6" =>	"use of traffic mannequin to slow others",
	),
	"r_d" => array(
				"0" =>	"install speed limit siren to warn drivers",
				"1" =>	"brief on risk assessment and SWP",
				"2" =>	"Warning signs to inform drivers of the speed limit",
				"3" =>	"Drivers to be accompanied with a supervisor",
				"4" =>	"warnings and Inhouse fines to be given for reckless drivers",
				"5" =>	"company contact number to be on the vehicle",
				"6" =>	"Toolbox meeting to brief on the work area",
				"7" =>	"Traffic controller to guide the lorry into unloading position",
				"8" =>	"Supervisor to ensure drivers are not influenced by drugs or alcohol",
	),
	"h_l_b_m_h" => array(
				"0" =>	"Use of equipment instead of man power",
				"1" =>	"increase the manpower to carry the load if equipment is not available",
				"2" =>	"use of trolley to transport the load",
				"3" =>	"brief on toolbox meeting and risk assessment",
				"4" =>	"all workers to be brief on the proper lifting posture from the SWP",
				"5" =>	"Supervisor to ensure no over loading",
	),
	"m_o_u_g" => array(
				"0" =>	"Supervisor to ensure material to be on stable ground before moving off",
				"1" =>	"Alum/ Glass  to be placed to 85Degree against the wall and support by timber strip on floor",
				"2" =>	"Ensure to check surrounding area free from any debris/Obstruction.",
				"3" =>	"Cordon-off storage Area with danger warning sign displayed",
				"4" =>	"Provide watchman/signalmen to stop unauthorized entry",
				"5" =>	"Avoid any storage of glass along pathway/corridor.",
				"6" =>	"Immediate supervision by site supervisor/ safety supervisor ensures compliance.",
	),
	"w_a_h_b" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure boomlift door and handrail are in good condition",
				"2" =>	"check the maintenance report of the boomlift",
				"3" =>	"Ensure valid LP cert",
				"4" =>	"Operators are trained to use the MEWP",
				"5" =>	"proper demarcation to be in placed",
				"6" =>	"warning signs to be provided to warn others of work area",
				"7" =>	"Training to prevent workers from working outside the railing",
				"8" =>	"Pre inspection of Fall prevention PPE",
				"9" =>	"Ensure that the free fall distance is sufficient",
				"10" =>	"Apply WAH permit to work before start of work",
				"11" =>	"Briefing to be conducted before start of work",
				"12" =>	"Emergency Rescue Plan to be briefed to all WAH personnel",
				"13" =>	"WAH personnel to be trained and briefed",
				"14" =>	"Only worker with more than 1 years of relavant experience are allowed to work",
				"15" =>	"Install pipe(taller than worker) on boomlift to prevent worker from hitting the roof",
				"16" =>	"Only authorized operator are allowed to operate machine. LOA on display for inspection",
	),
	"w_a_h_s" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure boomlift door and handrail are in good condition",
				"2" =>	"check the maintenance report of the Scissor lift",
				"3" =>	"Ensure valid LP cert",
				"4" =>	"Operators are trained to use the MEWP by supplier",
				"5" =>	"proper demarcation to be in placed",
				"6" =>	"warning signs to be provided to warn others of work area",
				"7" =>	"Training to prevent workers from working outside the railing",
				"8" =>	"Pre inspection of Fall prevention PPE",
				"9" =>	"Ensure that the free fall distance is sufficient",
				"10" =>	"Apply WAH permit to work before start of work",
				"11" =>	"Briefing to be conducted before start of work",
				"12" =>	"Emergency Rescue Plan to be briefed to all WAH personnel",
				"13" =>	"WAH personnel to be trained and briefed",
				"14" =>	"Only worker with more than 1 years of relavant experience are allowed to work",
				"15" =>	"Install pipe(taller than worker) on Sisscor lift to prevent worker from hitting the ceiling",
				"16" =>	"Only authorized operator are allowed to operate machine. LOA on display for inspection",
	),
	"w_a_h_sf" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure scaffold is erected by trained erectors and supervised by approved scaffold erector",
				"2" =>	"Only approved scaffold contractor is allowed to erect scaffold more than 4m in height",
				"3" =>	"Scaffold inspection to be done by scaffold supervior every 7 days",
				"4" =>	"PE design for scaffold exceeding 30m in height and examined after installation",
				"5" =>	"Supervisor shall check on the inspection tag to ensure safe to use before using the scaffold",
				"6" =>	"Supervisor to ensure no modification to be done by any party except the scaffold contractor",
				"7" =>	"Proper access and egress to be avaiable and inspection tags will be placed at all access point",
	),
	"p_p_f_l_o" => array(
				"0" =>	"Lifting Supervisor, signalmen and riggerman to plan for the operation",
				"1" =>	"Lifting permit to work and lifting plan shall be approved",
				"2" =>	"Lifting supervisor to ensure that the crane is on even ground",
				"3" =>	"Provide steel plate if ground is soft",
				"4" =>	"outrigger to be fully extended and on hard ground",
				"5" =>	"lifting area shall be demarcated and warning signs provided",
				"6" =>	"Lifting team will commnunicate using walkie talkie and whistles",
				"7" =>	"Lifting supervisor shall ensure that crane operator is trained. Certificate to verify",
				"8" =>	"Lifting supervisor to ensure no overloading",
				"9" =>	"Pre inspection of the crane shall be done with the operator",
				"10" =>	"inspection of the crane latest maintenance records",
				"11" =>	"Use of safety helmet safety shoes and gloves",
	),
	"f_p" => array(
				"0" =>	"Use of exhaust fan to remove debris",
				"1" =>	"Use of safety glasses",
				"2" =>	"use of face shield",
				"3" =>	"Use of dust mask",
				"4" =>	"Use of Safety helmet",
				"5" =>	"Supervisor to enforce all workers are using safety glassess",
	),
	"other" => array()
);
