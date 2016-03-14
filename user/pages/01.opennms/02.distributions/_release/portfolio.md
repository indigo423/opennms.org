---
title: Releases
---
#Releases

![Release relationship between _Horizon_ and _Meridian_](../../../images/release-horizon-meridian.png)

After new features are proven to be stable and useful in Horizon, they get integrated into the upcoming release of Meridian. The OpenNMS community decides which features to release in Horizon while The OpenNMS Group selects features to integrate into Meridian. Releases are managed through JIRA, a publicly available issue tracking software.

![OpenNMS Horizon 4 month release phases](../../../images/release.png)

* **Development:** New features are developed and changes in architecture and major bug fixes are implemented. To install this version, download the OpenNMS Horizon SNAPSHOT release. Changes are merged from pull requests after reviewing and testing them. Major releases can require configuration changes or data migration.
* **Feature Freeze:** No features are pulled in develop branch. The code base gets stabilized and is prepared for a first release candidate.
* **Stabilize code:** Problems are solved, missing unit tests are added, outstanding reviews are done, fixes are made, and focus is on getting Continuous Integration green. The code is prepared for Release Candidate 1.
* **Release Candidate 1 (RC1):** RC1 is the test phase driven by OpenNMS community. Hotfixes can be made and applied to development branch during the test phase.
* **Release Candidate 2 (RC2):** Test phase with applied hot fixes from RC1
* **Release:** This is the date of a new OpenNMS Horizon release, which can be installed as a stable release.

Release phase announcements are made on the OpenNMS Developers mailing list.
Full release announcements are made on the OpenNMS announce mailing list and on OpenNMS.org.
All changes are published in the release notes.
