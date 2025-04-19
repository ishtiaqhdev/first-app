<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forensic Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-card {
            height: 100%;
            border-radius: 10px;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .service-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 15px;
            display: block;
        }
        .service-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
        }
        .service-text {
            font-size: 0.9rem;
            text-align: justify;
        }
        .page-header {
            background-color: #f8f9fa;
            padding: 30px 0;
            margin-bottom: 30px;
        }
        .small-text {
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header text-center">
            <h1 class="display-4">SERVICES</h1>
            <p class="small-text mt-3">FIA provides scientific assistance to various units of the F.I.A, NAB, Narcotics Anti Police and Federal Police, Federal Government Departments, Banks, Financial institutions, and Provincial Police Departments on special request. This section of the Bureau has Operational Capabilities include:</p>
        </div>

        <div class="row g-4">
            <!-- Computer Forensics -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/computer_forensic.png') }}" alt="Computer Forensics Icon" class="service-icon">
                    <h3 class="service-title">Computer Forensics</h3>
                    <p class="service-text">
                        A forensic examination is the process of using computers for the legal and the analytical work to recover the evidence. Analysis examines the media to determine what happened and how it happened, and to find digital victims or criminals. A computer forensic examination will seek the who, what, when, where, and how related to the crime. Forensics is used in courts of law that is why a forensic examiner's expert witness testimony includes information about how the evidence was collected, analyzed and handled. It may also include a discussion about the state of the art computer forensic tools, techniques, and procedures used to analyze digital electronic media.
                    </p>
                </div>
            </div>

            <!-- Mobile Forensics -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/mobile_forensic.png') }}" alt="Mobile Forensics Icon" class="service-icon">
                    <h3 class="service-title">Mobile Forensics</h3>
                    <p class="service-text">
                        Mobile Phone Forensics involves extracting smart phones like damaged by corrosion, to mechanisms with still digital information, getting the data off the device even if the owner of the device has deleted files, a number of portable such as recovering logical and physical data from mobile phones that can help in investigating criminal cases. SIM reading may assist to check contact, networks (own and other operators), last location registered, and GPRS setting, SMS at all messages, deleted SMS, dialed numbers, and received numbers. Mobile devices handle data differently by different phone platforms including custom developed embedded systems strictly device specific.
                    </p>
                </div>
            </div>

            <!-- Video Forensics -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/video.png') }}" alt="Video Forensics Icon" class="service-icon">
                    <h3 class="service-title">Video Forensics</h3>
                    <p class="service-text">
                        Video Forensics is the process of examining evidence located at crime site technological devices. The video to be used contains the evidences of the crime. This could include images from security cameras, personal cell phones, and other media. For most crime forensic that quickly access images to confirm identities. This is done through the analysis of the images and video. Image Enhancement techniques and image analysis technique that are trying and extract information, examining an image to gain more details. Video analysis that contained in common media sources is video forensics that automatically identified contrast and forensic changes into human viewed.
                    </p>
                </div>
            </div>

            <!-- Questioned Documents -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/questions.png') }}" alt="Questioned Documents Icon" class="service-icon">
                    <h3 class="service-title">Questioned Documents</h3>
                    <p class="service-text">
                        Questioned document is a legal term for a document containing disputed handwriting, signature and writings, determination of the authenticity of the documents. A "questioned document" may contain a signature, handwriting, typewriting, or other marks whose source or authenticity is in dispute or doubtful. The field of questioned document examination is directed toward the identification of handwriting and typewriting, determining the authenticity of signatures, detection of forgery, determining the author, and the examination of documents to determine alterations, additions, and deletion. Common items of examination include checking the authenticity of signatures on wills, checks, contracts, and other legal documents, examinations of typewriting, printing, or other machine impressions, deciphering alterations, additions or deletions to documents, restoration of the legibility of obliterated or erased writing.
                    </p>
                </div>
            </div>

            <!-- Network Forensics -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/network.png') }}" alt="Network Forensics Icon" class="service-icon">
                    <h3 class="service-title">Network Forensics</h3>
                    <p class="service-text">
                        Network forensics is related to monitoring and analysis of network traffic. Regardless of the device the target is using, the network traffic is going to get created on accessed networks. After a device is seized, a next step of an attack involving an exploitation is likely to analyze network traffic logs. Network traffic can be examined to search if data was extracted from a network, and to analyze events that occurred both on public and private networks. Network data packets can contain IP based addresses and other information trace back to the source of attack or crime as IP forensics associated leads to investigate and prepare network forensic cases. Determination of intrusion detection software broken network.
                    </p>
                </div>
            </div>

            <!-- Technical Training -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/training.png') }}" alt="Technical Training Icon" class="service-icon">
                    <h3 class="service-title">Technical Training</h3>
                    <p class="service-text">
                        Technical Training equips individuals and organizations to perform efficiently. Trainings enable crime lab personnel to foster technical skills and impart them confidence to combat challenging technical crimes. The staff is technically well versed, highly qualified and receives top notch specialized training. The curriculum approaches current technology is accompanied by current relevant trends. Specialized training is also provided as recommended to analyze forensic electronic contents and techniques specialized in relation to digital forensic expert. Mostly field personnel or non-technical personnel received basic orientation on collection of digital evidence and understanding of needs of the original form. It is also vital in due of the rapid pace and diversification of the forensic and cyber crime expertise.
                    </p>
                </div>
            </div>

            <!-- Fingerprint -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/fingerprint.png') }}" alt="Fingerprint Icon" class="service-icon">
                    <h3 class="service-title">FINGERPRINT</h3>
                    <p class="service-text">
                        Examination of disputed fingerprints, development of latent fingerprints and their identification, examination of skid marks, appointment and lifting of fingerprints, examination of disputed fingerprints and identification of provided fingerprint. Maintenance of record of fingerprints & palm line studies.
                    </p>
                </div>
            </div>

            <!-- Chemical Testing -->
            <div class="col-md-6 col-lg-4">
                <div class="card service-card p-3">
                    <img src="{{ asset('assets/chemicaltesting.png') }}" alt="Chemical Testing Icon" class="service-icon">
                    <h3 class="service-title">Chemical Testing</h3>
                    <p class="service-text">
                        Examination of disputed handwriting, analysis of suspected questioned documents, dangerous drugs, poisons, explosives, and detection of invisible/secret written matter.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>