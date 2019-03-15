@extends('stakeholders.app')

@section('content')
<style>
.checked {
  color: orange;
}
</style>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="/reglvl1">Registration</a></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">STAKEHOLDERS</h1>
          <div class="section">
       <div class="container">
          <div class="row">
                <div class="col-md-12">
              </div>
          </div>
          <div class="row" id="myItems">
            <div class="card-deck">     
                   
              <div class="card border-dark  mb-3" style="max-width: 18rem; ">             
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                              <img src="data:image/jpeg;base64,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" style="width:100px; height:100px;" alt="profile-image" class="profile">
                              <h5 class="card-title"><p>Name:abcd</p></h5>
                              <p id="text"> Type:Stakeholder</p>
                              <p>Stage:Ideation</p>
                              <p>Location:Mumbai</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          </div>
                  </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                         
                          <div class="card-body pt-5">
  <img src="data:image/jpeg;base64,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" style="width:100px; height:100px;" alt="profile-image" class="profile">
                              <h5 class="card-title"><p>Name:efgh</p></h5>
                              <p id="text"> Type:Investor</p>
                              <p>Stage:Scaling</p>
                              <p>Location:Mumbai</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          </div>
                      </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhIWEhIXFRUXFRUVFRUVFRUVFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS01Lf/AABEIAMEBBgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgABB//EAEUQAAEDAwMBBQUFBQUFCQAAAAEAAhEDBCEFEjFBEyJRYXEGMkKBkRQjM6GxUmLB0fBDcoKS4RU0c7PCRFNjg6KytMPx/8QAGgEAAgMBAQAAAAAAAAAAAAAAAQIAAwQFBv/EAC0RAAICAgICAQMCBQUAAAAAAAABAhEDIRIxBEFRImFxE/AFMjOR8RQjgaHh/9oADAMBAAIRAxEAPwDH21AkTBRBqH0RNSqGghZ+8vjJhcjDmlNtUaHKhzTr+aMt6wWYt7lxGU20YkuM+CsnFd+wKQxqVcry3q95QvXgEDyVdi071VJJrY9hOouMYQtGq4YCP1GNqUfaMqY0oxoD0xkGhok/NXWdXM9OiTVrgugIylV2jKORNrRLDrkh2EurafPCmLqFzdQyBCxv9WHRW2C/7PI6Kh2CtTSphzUpvLHOEmPym39RGJ61WOEITPKaXFkfBA1bUhbYZosFllF2FS/3lbbswqa7sq1y5INlgqQuNfch98qVJVcUtkG2mUmRJ5Vd+GkwEZptiHDlD3dl2bpWXnF5HsNiz7NBlQqvTSs8QlVYA8LTjlfZGi2myQpbjwh6FQtwUXTdKvVDRBH2smV5VaAE5o0vJJ9ZYBxyjF26LJRpWLKdXvYTOkyQlFJpmU1tKqmZfBmsqqW+UZQpgiFGoupvhUttoZHG2hcovusrkVyFGFy9BG03GUwps3hUnupoSimWumQ+zBoyj9EiSUAHFye6JaANnrKE56BFbOrW8vlWdn1C8uKvegcokU5Cyqb7ZZH2D6lTJakjaa0F97qGoWQ2yU7ypIWSFtARkqNStKsuRlDQrYS5IUl2ihvyokwq31Ar1jjJbFY5stSPCcMaCJJWNZURg1J0QsGXwbf0ANAxrSfIILVaAAkJXb37gfHyV1zq4OHY/r8lXHw8qnrYKK7SlMoPULaCiqV5s7whwPmf5K2rdsqeR+RH1C2PHlh2tBEtRhCGdVIK2Gn6Qx5g5EA/Wf5IPX9JYwYEJI+TBy4hBtI1EtI8FqJbUbmFh7QJtQqkQAqc+FN2gNM91KnGAlgprQPstwkpZcUoUxZFVEAdgKJpABVhhVxoGFsh0XQCadwEBf0Ny5lN04RBSTlxegznqmLqNpHmivswjCI2ql1aMKtzlIoAqtSMLqD5V8gmVMUx0VlqiKIvu8FeI6pbSvU6yRojixrYuDWwqbpmfVV0QZTdltuieizNcdj0JHUSBhaDQz92oXFsOFdQIY1PCVxsaMfYPdiCT5plpzdwCR3lzM+CaaTcnYI6KvJFuI0XboOvKA2ys/XvCJandesSCs1dHPnKpindSEk2gSpXXMeoVWqqoDC1JCMnWqSqg1DgmUwpEbU7+lCrYLSOYU7mQJR1jaCd3ihdVrwTBjaYnnvHgDz59E+Gblk4oIA64JxMSPn+WVdaW24E4AbySRM5ICXlzRMtLndMiGnofVT7aqeX4Iggh3HhxBXQtJaCkPaVMMxuAB5njH5IbUaIB+6qAkDph3zxlCUA4AAh8jjEyPQ5hW/7CqBu8B0R0zGeD0Bwlc0u2Pwb6QVpOuPpgtdySAT1Hp55KN1O4NWCJ9FlrzukSIdJHjIgH9ZWi0iqOzk+JWLyMEY/7sVsT7A7aJaUbRf9V1dwPCpmFmcnJEsY/wC0DEKDO9yF5StQRKqL9qpSS0gpoKbQAV5YISz7SVaysU/1JFkZUgzsABKW3HJhW3F0YQX2sIQjJ7EmznVYVTqoKEu68oZlXK1xxWrKZMOdTVVMweV4bnwVbnHlMov2Sw19zC5KKtcrk6wKh+Rp67tsJ/pb5ZKRXVOTI4RGlahtO09Vlmrjou0nRZqVwWFV21yXNROsUd4kcoawpYIQbXENVKiprJMJxpgABCEZRyVZZk9pHQhBPQIqmN7poDZ8ljq9cFx9Vtr6l93PkvnNyIqH1TRgpEyJ2MDEKsZMIYVDCIo1AnWP5Aonle1xICootPCcMqh2FGtbgCQleRLTFkt6KGVICVap77STDT+vj+Q+iNfU6QhNRywDqM+Uevjgq7Ckp2iKL9DH2c0YPJkgAdeZlbCh7KiZkAdBH656rO6LestmN3Mc920HECMT16rQ6H7YW7nCmdzHHjeB9JCealdm3FwpJljdDO47aZJGG908nqe7H5x5dEydpAZRFOHOIGSe6Nx5JnJz6q7WPaqlagbgSSMNESfmUot/bgXAgUmgHxqNJ/8ASq+MmrLritGD1uxYHuO6XCRHoVOyZDB5iY9f6CN9o7Em6aRhr2gzEgGdpx1/1QVw6DAmPMQcEgyPUFWZXcEjBkg7cvRNpyurDwQoqGUfQpFw4WOX07M7JULkgQvDlRdRIMKRpkdEmu0Qup20prZabISqhWhObW+gKmfLotxNXsD1CxABWeuKEFae7ut3mkd03K048nofK41oT16aDeEddFVCjIWyEqWzI2BtOUS52FKnarypSgpnJNgsFeyVyLDFyPMlmsp08Z4Sy7ZBkLRgAt8v4oL7CCuPDNTbZfYboo7RmeVVdtFMmFbZPFPAwF7fMDwjPMnIuu0KKF4S+OiPaYe1yGNhGfBX1H4BVqnGXQsGaS6dNH5L5re/in1W+s6u6ksXqVKKp9Vbimk6GnLZSAobFN+FEK/kg80W0AQcJs3vNgoXT2gmEydSjjosOWa5FDlsXPtoQFemTIbzjp0mD+q0ptiW8JXVtiDIwZTYfI3seORId23sxSum7nPM/sjhSf7G0aT6bxu3Co0gYyQQc48lXoGomi8A8ED6pj7R+0DmPpupNbUIyQfCekdcFblKTdJ6NkVjceRodZ0alcPBqNkgDafT/VC0fZO1GXUWAiYgRnnoqND1itcO3uoinSjD5MlwxAEZ9fJMr3UIBP8AUpOTWi+ovZnPaCx3ODmO2ClAOARDiOSeIiVhb6pucXeJ+g6LR6ze1HbqYw0ulx6u4x+Sz9a2ckc1dGDyMvL6ET0+33LT29qGtWbs3licUr+QsPkqUnrozEjTBcqrtoARFs8FytvaTSqeVSSYrElMiUaKXdwhLqnGQibesduVrq1aL8dNANQEFBXVdMLx/KVP5V0EuxMiKGOlXErn0xCpCu7KGWtqQq3ulWdkhq+FIpNkooLsrl430XqvIbZtSB5Kk1yOFa6nOQvbJ4LoK4mqsv8AZSx7nco+hxC65DRwhaV6AVLclpFi0MQRwUJd0oXPriQeqnWuAYlLH6WmhdJ6LbN21kFZ7UhLyVpmkbCkV+QSrsWW5AmxI5yIZwqKjcr0FbXtCNhdvVgyj3ah4pNTflXveIVU8ab2LRtrO7YWc9EvqFskrKUrlwwDhNLWqYyccknoFn/0jUqXsDCL/kEeqortDi1wdU86bXRJ/d/ko3D9zWuHVoInnInKrttR2dBIMgnoV1YwcYpe0bccqSNHYVy8xvuaY6734I8A0tgeoV91dH3QSSSAJ5J80I32lD295sv6cfqrtFt3VHGq/gYaPNVtP2apZOXRTXoiT1yVU6xwiTO90ZG4/rkImpWAb5ri5XOE2n2cuT2zM3FGCg6tXamFzUlxQNywFbcb+ReRCjekZlWv1Bx6oVlsubRMq1xhZArtC7lHMeAEHTbCMt2hyqc+JbDJxBLt0pa9qf3NqAJSqrb5T48qkJLJyB2+CmLcKyjTV1anhM57KyoNEIN9GXAIqi09VCuYIKMXTCdc2ogL1SNSQuRUmkGrNDcVg0JJSqE1JBV9uS9vmq2UdrhPUrNjiopr2Ougi9cUCaROVoqlsHNEoR1IRCSGZJUgNsAaTtiUKKzt0HxRkZIQNw2HBaYJP0MOqtbucpWXIplEluEuqhwMIrGl0NkRB/KgVZwh6hMqxFXRJzfBdTYpManun+z1Rzd72llPpI7zvJoPHqfzTwhKb4xVklJIX2NoXEBrS5xOABJ+QWhdpnZsaXDvPwG9Y8/D/RaXT9OFClup0xSeN0vcdzu6SAOMS5juOilWpsFqy4rvAAZO4nAwwyB1+L88ePT8bwVjkpzdv/pFMp8tIyN9pZpbQYLHCWEEGB+yfMfmlFzZq++9tTXrQGRaiQNwl5JMl4I90naMd7g8ymWmGnc4ovkidzXAhzY64EEGD4ccBLmxU7j0a8WRS0+wXRtPL3BoEeJ8Ato4NpsgYa0KmytOzENHqepKC13UW0mEvw0ckkgAeo64gDkrJDG8kqRqlJY42ylzXgNJb3ahcWnzcSdp8D/NAVK5ODj1Vmm+0QrMZEObLRJ95p8Hgknp1MeHivdQa3tqrCCQ0t2lsFzZDSQQfeAM9Qr/ADf4ZHNU8ffX5/8ATk83bsWV2Aoc28q6ravjcCHM8RP0IOQVbaVQOVxckJ4vpfY6LbSxxkKu8tgMpoy6EJbdv3GFlhOTlsPQA7KstKTpkK1lFMLWjiVbPJSGQHckrymARBRFWoOEDMO5Sx2hWLr2W8KgXxhMtRIIwkj6RlbsVSjsnoPpukIasw9VdbAgK80pUviw0Li5cjPsS8T/AKkSbHVgAChtVqicKptwvC3dysihUuTHROnqJDYlTF3K8dZ91K6sjqnjCEuiUH0q3fE8L3U6eJSttxBCY1q25vyV6jQ6egnTrzBBVF24E4Q1vgSqqtSSmS9jOTo8qOgphpOiVbg/dt7swXOw0HwnqcjABOULb2pcQPE/0V9a9kLmjTo4EbNmCBugGSevIe04HmYlafFwLK230jPOQo0v2WFF4w15AB3vgdJljSePnPomOo6Y8vb980gEdWgdOAXfwUb7Wajao2M6xMR7rnU5kQ74Dy4qnUdar46GP26hOQOJeV2scFBVFUv8Gdu+zTHSWln3rt3ukyQ1uKm13URyepWebYUqoFG4LTQYO4wuftcQRtDnMMENI4nMA9E3Y2o+gXGoQXU7jjB4NVhweRuHRZerRpi4fL+HvzPQOxnCiV2G6CNtmHljmMdTIywbSMd7ubqpc0wNuI5RuoU6FPvNaztKZJBaKedoG6Nz5bup7XYGAHeKQXdGi2vTLXD32H6P695O740GUA8520KTus7mvDG8H9kx5glRpBTYdqNak1u7eGhzQQeT3x3Ib8WYxz6nC+dVdIdcVGtrOcWSAxjnZEuMEnZtJ7xOZPeKO1iwabgDeSGtIY0klrGsbsGwdJDQPHAk4SahY/fENIkBxHqGHaf821V4sSgmkWZcrm7YyvPYs0or2TpcGtJpuLXhwe8uDXBsGNsdOikyzdVquqtd2bixvccch23gkwBnxTHWBUbTdtqGA54iQRDKRptwTHNRp+iSWF9dCSCYAOCXAGYEEAgQrklHRV2NPZ6jVFRzXtbUaTkAzh00z04+8n/CF7rGlshrmtdTJGfiaCDByOMx/mCD0LVn9sC5nxM6U+Q7tMHZPFM9U31n2lAY0Oa4EtILZMd+pI5ccfcnoky4ceVVNAVozlSmaQyecggyCPEFBsuu8tW+nTr224EExxiD04HDhIgiOYIEwcPfHYT0IwuD5XgrFPW0y6MrQ2Nyjm3o2rHtvSiW3+Fin4oRr2uSUHc3GUNSrlxwvXNMp1jUXslE6RLjlGPtgh6ZAR/bDbylm3eiPQJUoECQvaD45Vn2scFCXFwFEpPTQUwx1fwXJR9oyvU/6IeSGFFgByi7h4DcLOU9Skoyq5xb3UZYJWrG/AyoX+4R8kou3wVKxMDK9qN3J4QjF6GjtFRAKtoAwhqXMJpplAl0FNLRErZfZ28mPJQvLTYQUdOyoEbqtrvaCFXKX9jQ4JwYHoW01Wkt3NBy3xwTt9SGkfNbhr6XaloAOS1xHxOc1pLnRw01PyPllF7E2rGV6AfHefUe6YGGNBaJOOkwUyvqO28fsAcxrWzE/sgOcRyBuDs5HGcrueHjUMSXzs5s+y3Wr0ueDSbvJh2BJy1vgJ95tQ/NdfU61UNGzZPiCOJyAemR0Rhq0xmBsqMDiXM3DdTe4OxMT94MuxxEcKrXNcY2m1rBOOGspbenRri2fM7v7vValV9Af5H9hpX3LQ5892qOc5otEYDglD/Z5hrOMPLdzv7N55PQ72/VX6DqlZ1BhM4FTJc4HFvTI4IHXwWcuXVn3DuMF2djSceDts+HVCN3bI6odXns9SNQdx3vT7jz8WP7ZXa7obPsplrgBSp/A/EVQee0x6mY6ykN2yuKzZdMvby2fijqEw9o6dVtoDI/DoD3BP8AvDBg7cc8/RDtLYehTf6CDcP+8A7p+I/unjZjnx6oPT/Z0drHatmW9QeazB1joUXV1K5bcPaBOxlNvv1MnZS3fGOoIlT0DVbg1SXRtAaXEl+BvBnvPIjuqyN0KyGvaM7YYqTu7Q80+tWj/wCJ+6UmoaLcBhLTI8g5xGeuxrgOPFP/AGiv7hrWtNI4DZGySJdUcSQWnja3p8TfEJKzXtrO9SE9HFonO4/AGHr4p7/f/ICOk06jQ8vbJAc6TyCGOaJxj8TgxwhNavBU2tLYI2tJnoymwj86j1o/ZzVWPa4cGHRO5wEGl45HvdHE+qF1agyrWLZAO55EmoD3ajm8PEj3ZmOB8wt6J7Etu91NzW0yXeLROT1wPDj5Hoh/aa0Pce4CSC0wQQSyIMjHuub9Fo7qzp0NomQA2S4CThj92w+bjBdgdI4VOv3DK9tVgkmi+m6SXOJDnGmclojkGPLlZvKhyxP5Wxk9mFp0xK64Z4Kwt8FwELi3uy3o90+ptwUfXeCJQbWgqVTiFVJJyslgta4KJsahPmqRb7lNtIsTy4tUCi65pxlCgyralUkIF74KMIuiF7zBXiI09jXNkrkHNJ0OooROblNdNuYG08dClr8qyi9a5q0BOh3UpdWleWzOZVNnd4g8IupxIWSVp0Wr5RS2lD5TnSo3hIRc5zhMrC6G9vqhOFoeHYbrw2lrvMJ3b1Q6lPkg9atg+mCoaTUkdlwTj6/I/okjj/USj96Lm+Nv7BtEbLi3c10ENqz0IJZ4+gTeje9nqNVlYgkMpgF0kGGSDI7zYB94cZ4BwkuNOLanddugEiDu+FzDxnn91ee2FN7K7KzsOc/bOR7rQB0mePovSJJJHMGut2X3jSO6x1N7gMcipQ3Fp6iHjIxg4HUWrUpCkcycxjM5H8vBGXdk+pTpNM7h2jQR4w0PkSAZqEtk89nyh2abTZRcXS50tG74Rlpy+do+QPkUWAZ6Jfv7EbG48YwAbbYZPTNI5J6oH7LXdcPIHxOyCH9YOGbiPomljfMYzJALQ7gO3d1lYkh9SXfGMtBVT/aNnbuB3OG9w/EqO+KBgtaPzUTrZGtA9/pVx2zcO98H8KvHv/8ACT280ypUpMpvO1pFLkEe7cB8ZA5A/rCX1PaGka7B2Z95g909Xf8AG801q62zZRd3mdyn1I98OJkbndJPX9Sg2wpIyL/tArXD3UXyarpGyYG55HGfDnwXaPqLrbfUqU38sAGwjcTvJgkYwDnpg+Sf3GrUe+d0yeXNoudhuATU2k/RK719KrTERAc6e5THAbH4ZOck5jqiqSI7ZdqF19ponsmOaBtHf2GWnDaj5MOLSC0z3eRtkNcscRsc5tw8tIkEPJI3DGZwfmeDPBCbWOpOa/YwSM/ORDgSeA4AZOAQ09EdqOiNDd57zgBzIxEtcerQWSDPeOxox1Z60L2ZW1uS1+2m1oacTGBkd4kQA3dEnwjyTeuz7PXpPG4Gq2o4s/ZJDg7HM738kdMHql11eUWjDGlw67RLfMADayCAfiPoVCwuqnb0y8lz3AETJ7r3BoEHrMHH5IWEN1gOc5hqGAQ10f3mhvzP3fPPmpWbGVBWYzBNN3hnw/XxU9VtHvaxz+6AGgziIdVOcGMH18AUwtNJDYDAQ4UzJ5BPMSHeI4j+SLSaAfPNym94hB1iQ97QOHub9HEfwRVpauPIXn5xUezRx+CVEKUI7sIEIe4aGqhTTZOJSyttKud3wq+ykSrrF2QFJVVolFX2WErv3AcLWX1EBk9Vjr6n3irPFnzdsDRXZVnZgwvUO3HC5bJQt2Sj2k0praUAUNToFEU5HCTJK+iF7raFfZ1Y7p+SoFecFesGVnd+xk/gvrW4lD0qZY+Zx/FOaVvIBU32YKR5UtFy6LxqMt28qeklzaoe0ZHm4cnxaQeFSzTwPFG25ewktaXHaZwTzgdD4pvDmp51GP3FyzdbLXauXVCajcmZwD8ORGD1PVX+2V+yqxzBhzXio2S4iWnMNgj3SRz1Svttzi4gcEeETx+QPRE6jWpue04xM5EH7x3l6L0VbMY0t9de5lBpoTtY4secjfRbuLM9S57HTn0wllevUqPc0YAJjxABjnpz0gI3Sr2mOzZz2TnkmBJaSxrO9ye6QDOEBVZUNQhoAMAdBJaAHEA+8dzScSlCG6DbtLau88U6x6cmkfPyUqbqX2l/h2r/AK9p058SmXszoo7B5qOgu7ccuBhtMjLdk9SehV1HQ6f2h0tc4b3cU6nV3iagHTwRftAAjc0vtFKBPfo5j95p/Z/qE51B1M0aLQ3gUZ6EBlu4jpxucP8A8VlPSKQqNOxwjac9njaC7rPgmOt6Sw02hoId7rSAw57ADhsH6QpJq/8AJEjHarQpfe5GHuHPQQB1EoO3si5tPYXbS6pO2MxsHBPSOZAHU8S41DRabt7y5wLnkkd9oBkTgtdH1KI0+jSp25pzJMv5J3d5wAnYC4t2uIY3Jl3HIbpErYFWsWUwHNj1jc3c39gYNV/UGIEYAklQraka7NjM52kkzBJw4u4J3wSeO/A8XJr28qVHFhMD3fUeAj4fBoxHMnKlp1TsXFnRwIPiOh48OYHgAj9gCh9LsXkTkdDiWn+Y/VM/Z+7Yam9wDQG5kOI7p7TIaYPu8mB/EzX9Gika7z3p2kdNziNwxzy508DImRAQU6bS+k3oZb8ndz9Clegmx16v2nZ06fSo/oIa0R7obLR73SZnkcJVpbqorOLu9DTyJMGJEkTGVPsH1agfSB2bGkd15l3ZguMxHPn0U9FtararpHLXYBEmC34Rnp4KV+/7kMReMivVPR1Rzv8AM4u/imNqVRqbIrOI67f/AGNVtFxaJK855W5tfcvT0FGEvvaW4q2lWDjyqrirBwqIRaYSyhb4Xgo7TIVNO5Kto19xhFqSCguo/c3vFIb2jzjCdbIyThLNXuREBNgtSpAe0KDRXK1j5Xq3cmLYwqQFRvV1cLynbEhZ1SWyNA7WEnCJ7PxRFO2hc9hUlMlBlm/CsbVIISym9w6q1tyZyFQ4O7DGTQ6qVyG8o7RLxkOLi2YxLQfH5rOirIV9vSEGTExHP8ls/hsEsrf2DmlaNrTt21KTzA4OT2wHdDWjDht/tfTCUUtPZUf7rjBMkN3iNznY2PaOqN0fSyaQyBuLGmP3t1Un/K+n9FmmF5rFoO4kNI3AEw5oIEkE8ELt9FHo1GmaYxtzO0waW33SwAjc4El73AZZH9Sh7rVmtrVHbon9lxaCZyCSC88nkJFbXlRtcxgx0aAQWHeQIE9HDH7SFumhrjmcn6bjB/RBENtZ6rVFvABDQyueXj+ynkOEpN9qrOrP4JD38taTyepBJ+qKp6g425DWE9ytECTmg3wHmlYq1e1qYIy4947YyTy4hF9Mgxo1K293eyGVTIEcUXEfD0IWr1LcHEVa3ZtBkPILgC1tMe6YByfXlYezZVdVd7mWvEdpS6sLf2vNaDWLis1wO2SW3XuQ44dSb8B8HIvsCToTXGqV2tAk7ZJ9+o3O53RrxHyTnStQqOohrgSC6nBmo4gk1HA95x/aWduqlcM2mk6BOdjo+InER1TjRtRLabQ5sQ5h4HDKFNx6eLlP3+9EM7f6gXPBDAwloPyeA4DyA3R6AeClo9y0uDnEmoIIABk5HB4H8hjJxSLtvaw5vwsHXo1g6ei7R30zWPQfLy9EfZDUaxqm+mxm8NkNLzgDYGghog7mRMAwMclZK5oN7UES1oEx3CZEujBE8RMfVFe0NIbWhhM7WRzOGsOI8kNZuHZvDh3mgxxP4VUGYHig+yIfaRrNJoP3busRuxiP+8/gnmiawx9RwlwBa/Dnlw+bXt2+PLljtKrsAdLenIOOnSCnPs+Kb6rukh4+oPkEewGY1kgXFTwD3AegMfwQGo342wFP2jJ7eoP3j+eUoAHVcCWNObb+WX3ostXlFkEqq0qNCtZXl0BLO76CpFjQAMq21pycKbbYHlWe4RCocr0HRK6EASs5qTuQFqKlLe3zS25tQAScI4MiiyUZxjyFyJfTyuXR5IWxu5G2/C5csExi3oqTwvVyBGUN5XVV6uU9gIUuUZ/IfouXLf4H9R/gSZutA/Db/X/ZqKydX/ev8NP/AJbFy5diX8pTDsEt/wAR/wDf/mpN/Gb6N/RerlXH3+Sz4Nfqn4H/AJT/APlKr2W/Fd6u/wCpcuR+SI1dl+Kf66tQft977P7t3/8AWuXJX/MRGFdwz0K3On/gf4Hf/Hprlyb4A+z51rH+8v8AX+KE0j8Q+h/ULlyJH2FXnv0/6/smIGn+GfT/AKaq5cl9h9F1j7rv66hPvZ38Q+h/R69XJvQpl/aP8er/AHv4BI3Lly48v55fljrorp9Udp3vLlyGTpjDtq8uOF6uXN9jhdnwEJrXBXLkkP6gGZ13K9XLl1UVs//Z" style="width:100px; heigth:100px;" alt="profile-image" class="profile">
                              <h5 class="card-title"><p>Name:abcd</p></h5>
                              <p id="text"> Type:Mentor</p>
                              <p>Stage:Ideation</p>
                              <p>Location:Delhi</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                          </div>
                      </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwBXyySI8A8AQOV0VKCNSTVk8ZnRXo6Cq_76rVgn6WqoET5kbgjA"Style="width:100px;height:100px;" alt="profile-image" class="profile">
                              <h5 class="card-title"><p>Name:abcd</p></h5>
                              <p id="text"> Type:Mentee</p>
                              <p>Stage:Ideation</p>
                              <p>Location:Mumbai</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          </div>
                  </div>
              </div>
              <div class="card border-white mb-3" style="max-width: 18rem;">             
                    <button type="button" class="btn btn-info btn-block">Filter</button>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">International Users</label>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 56px;padding-right: 56px;padding-top: 6px;">User Type
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Acclerators</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Investors</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Incubators</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Service Providers</label>
                            </div>
                          </ul>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 72px;padding-right: 72px;padding-top: 6px;">Stage
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Ideation</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Validation</label>
                              </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Early Traction</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Scaling</label>
                            </div>
                          </ul>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 61px;padding-right: 61px;padding-top: 6px;">Location
                            <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Mumbai</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Delhi</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Kanpur</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Ahemdabad</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Indore</label>
                                </div>                  
                              </ul>
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 63px;padding-right: 63px;padding-top: 6px;">Industry
                          <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Automotive</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Chemical</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Education</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Finance Technology</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">IT Sevices</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Media & Enterainment</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Technology Hardware</label>
                              </div>   
                            </ul>
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 66px;padding-right: 66px;padding-top: 6px;">Sectors
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Daily Farming</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Food Processing</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Business Intelligence</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Industrial Design</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">E-Learning</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Healthcare Services</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Integrated Communication Services</label>
                              </div>   
                              </ul>
                    </div>
                  </div>
              </div>
            </div>
        </div>
            </div>
                <div class="col-md-12">
                    <div class="card-deck">
                
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW86F6Ws_TSU6mJoD_qQeals8tMXZ0shxf_AuIxnSWZ3PbS1MItQ"style="width:100px;height:100px;" alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abce</p></h5>
                                    <p id="text"> Type:Investor</p>
                                    <p>Stage:Early Tractionn</p>
                                    <p>Location:Mumbai</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">
                                    
                                    <div class="card-body pt-5">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgTg_QJfxBgWFkjMjdtqHlvIqQ54PVcJeasY0oUFxdg3-7wTyj" style="width:100px;height:100px;" alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abcd</p></h5>
                                    <p id="text"> Type:Acclerator</p>
                                    <p>Stage:Ideation</p>
                                    <p>Location:Acclerators</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3jO9c07oHHJqOZ1cjs9nNIbJlyg0eHPtKDBayDONJaHbwDzHtFg" style="width:100px;height:100px;"alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abcd</p></h5>
                                    <p id="text"> Type:StartUp</p>
                                    <p>Stage:Validation</p>
                                    <p>Location:Kanpur</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>                           
                                    </div>
                                </div>
                        </div>
                      <div class="card border-dark mb-3" style="max-width: 18rem;">
                          <div class="card profile-card-2">                                
                                  <div class="card-body pt-5">
                                  <img src="data:image/jpeg;base64,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" style="width:100px;height:100px;" alt="profile-image" class="profile">
                                  <h5 class="card-title"><p>Name:abcd</p></h5>
                                  <p id="text"> Type:Acclerators</p>
                                  <p>Stage:Ideation</p>
                                  <p>Location:Indore</p>
                                      <a href="#" class="btn btn-primary">View profile</a>
                                      <h2>Rating</h2>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star"></span>
                                  </div>
                          </div>
                      </div>
                      <div class="card border-white mb-3" style="max-width: 18rem;">                                     
                          </div>
                      
                      </div>
                    
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                    <div class="card-deck">                  
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIPEBUSEhUPEBAPDw8PDw8VFRUWFhUSFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQFy0dHR0tLS0tKy0tLS0tLS0rLS0rLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tNystKystK//AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgABB//EADwQAAEDAwIDBgQDBwIHAAAAAAEAAgMEESEFMRJBUQYiYXGBkRMyobFSwfAUM0Ji0eHxI3IHFVOCkrLC/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAHxEBAQACAwEBAQEBAAAAAAAAAAECEQMhMRJBURNh/9oADAMBAAIRAxEAPwDAyBCvajHhCvKhaDWrnKQUXFMlL10bMhekK6FmQkZpCzC8qG4RMbMLyRmFKo8oI0zDUHRjKNeUqqPGK8KlgREYwgqomGUfSjCBn3RtM7CYkSe1L4R/qJi52Euj/eInp5eG18JTrMlmlMnOwkeuO7qbMFTSZTqGYWSXSad0jg1outWzs8+24v0RllJ6eONvhe6oAXRzXUavTntNnCyqihISFWzm6EjHeRjm4VcMeUHFzQhapyYBmEvrmbIOqIzdFQNQsKNgKaP1CZqV1Lcpw9LqluUl7BkYUbK1wUXJxFQjcjoYw4JeUbTuNkB4+mF9lyvL1yZFEmyEcjJAhpGoNWF45eXXOQEQi6cZCDBR9IMhBnDW4XTNs1WRBRqThSaFMcosJfG7KPaUqqLW7KwSYVHJSDCRgHrseSNFaHqZ8q6kqUBVMNyLHG/9UZplG9wuGuI62NvdByi3ToOnlvIiZYCB+XNBQxOa+5Bt1sUQZeHR2SfWG3CbN2S3VhhEZmXYeEd489lsQ1fOez2oGJx8eS2UOsNIWXJhfrbfjzmtCNapgWjrdJP2VNamrL0O4rbDHUY55bpI9qhG3KtlKhA5CovOyW1pymjhdLquPKQAByMpSqPgIinamm+pTJbI9NXtS2WLKF6BSqAci5oMIQxpxFRJR9I24S4tTTTtk56iuMS9Ra8V6TslkahZWo2QoaVqhoBIXOVj2qBCBEYm5TKlbkIKmbcrQUFGME7oPScYV0VKX4R8FEHbnhA3P91GbVYad1g0PI/ie4NA8eG4N/VEhW6EU2ijcgevJM4dBhuA55uD3g0YHuPqLrE6n2pe7925zevDIbem9krbrrye+XO5cXF3vVzRn1CrURuvqDTTUwdY3B+bi4ZQRbGNufNL39oKctc9m8bMRlrWYac2bkOwQbD8K+fGsduxxIttfved+aHfUE2Nxg36Xxax9FULT6FTdqo5bYa11xwhwi7u2LgDlj1VGodpHOaMkW4mBtmg8gLHfkT6r566Qte4C+3G3le3eafuj31Nw1w/ED6FrT+RQD6j7TSRusS0tfdxPOxwQfIAEeSpqtbc/hcwBnECHhuL2JBx6fqwtl6qSziQb5+wA/op0dRcAX/ic36h1/qgNNS64b8MgBHJwwSrqypZI27CHdeRCzHx7H18NgScKcFXwuucC9jbGP1ZTcZ6ezKm+ZaCkcbJHG3hdYi3mtBSgWCKcPIGYC6RXwAcPoqpGpBn5juq4HK6duSoQtWdbQTxISU5RJS6pdYohVe0BRAsVCByI4bqomqJHqh2VdJGVUWpK2g8YQb2ouUIF7rITUS1HULUCHJlQ5VY+oq4lcrDEV6tEs89114W4UGlWrONAcrFVwomRVkJ6G06BmVqqFoNllqQ2K0dDIizoS6B65O4O4Gvc0E2kkvw2AaTZgHtff2usbqMwce6LdLYWh7X1ZDuAbkBx6g5GfT7rJHJ6oxLJDhUg4jmVfFATsL/AJqUlMRuCqSgypIyCQeoRH7YHZ2dzts4IJ0ZCiGlGxoWybI8DjyO49/urxVd30Ybe6AawjPquJRsaXGS/r9DnK6nfb0df3x+QUYoz0/X6KJfROtcX257+R9ktnpWZ8/X15qTajnzyD0O3ChnRkHYqDU9k12nTF7Rm9sC+5tbf3T6kmwFmuzovzwGE3te7jsPon8bLKK0x8aSlqrhXOkSGnkITCKW6Wy0oqgqKdEVaqpG4UVpPBDm4Ses3TtwwkVW7vHzRAuo24TKniugNOzhaClp8K8e0ZdUqljsgZd04r2WWfq5spH+OnOEsqXouWTCXVDkFXsbsrQ6XFhZuA5Wv0YYRKJNixTLkzawLlWx8vmTd1eThVhquIwiF+hXqDirJFQ8o2elkLk602TKz4dZNtKlN0WloDrsJM0mL3ZxNG3EGtPPwKzMjrYHr4r6DqUAcxxIyGkg+hFvYlYL9jcSzBPGWtB8zZGNGUfQex3Z1vwhLILuOR4JvWaDE7kAQn9BppbG1oxYAKEtMQsLlXTMIwFX2VLnHh22/opDscLb+a24gPRRMLkfdH+eLAV3ZstG1/IGyVP00MyRfzX0uoadln9T0viDiPROclK8UZQDyHkvJWE/xfVDVkD4yL+P3QpnP5Laarny3BEwc4gE/NcjyHP9dVWIQcdCudIXZ8LdLC+yrDjm3irQf6LKB3RzP6+y1sEN23Xz7Tqiz2eBaPPIH5lfSqMjhU2drlUfCsp07sq2ocAChaV9ykBFUFClGFfI26jG2wUZRpjUpNlnKj5j5rSybLOz7nzUwzDRBn1Wvp2hY3SH2K2NHkLfDxhyXsv1pgsVi6z5ludXjuCsTXMs5LKdqwvQaQ4S2dyZSbJVPuoVFtM7IWy0MYWJpfmHmt5oQwiTY+tHIXKyy5V8j/R8zaMq5wwqWDKJthCQMoQ7wipwhZCpUqKZ6OcpYSmWi7p0j9zbgg8wQlug0TPix/FNmROD5Ljmw5t5ub9Smg2QkrGn4gN8xucOEkG7Rf7AqVNzL2qpieBj2g7cJwV7FXsfm4svicrWcQDTJxHwO/QZufZaHsxqEjXfDJJv8t98clOWOu40wy/K+oPnaByQzqtp6LF63qUzRi4/NZWo1We9/iOHLBKiTbTLLX4+uOjDuiWV1ObHC+d0+oVRz8R1upc4D+ieabrlQwWeDKw/itceR3TuH/Uzkv8AFGt6cS0kC/NZCojLSV9TaGvALbWPLmPArL9q9MDQHgW5OTwy1dJ5MJZtkmvVrSoujx7o3SdHmqLmMCzd3Pdwt8rro25/m3qJ6TADIDuG59b4X0Gh2WL0mmcxxa8EODuEg8rf5W706DuhIeKK9vdQWmvynVTTXCW01PZyUO3owvhRcVzsKLuSnNWCUhx6LPVDk+l29EhqWqYr9F6OLn1W005hWK0Tf1W404rXBlyeqtRjwsVq7LPW61B2CsVqYu4oyowhPKgJYkxlVBaoUChZYrY6DP3VkxunmlSJb1VY4/TW/tC5Kmyrk/8ARX+TINdlE3S9kmUU12FTOB6ooN7kVUoJ6R14Sm+jJMU/0Zlgmk34sI/sjSCWrschscjiPNvB/wDYS2TZPf8Ah1++mdzDGtH/AHOJP/qFF8aYwt7U6aGTNLI7mMWYQD3R9uvupdj9AfJP8eRtmxgu8zy+4W/no2uPeAzk3RdYxscQDbDitYDHdGx9TlR3prrth+0unh97BfPtQ0ezs34Rvjr4r6bWGxN/8If9iZIL4v1Uy6rTLHcfPNP0sMY7vO4yRZzLN4QOVufqrqOhmDr8r8sD229ltv8AkDL7W8sIyPT2MCrLK1GOEnhVp1OQM4Q3aKDihf4N4vbP5JzK8BK613E1zeoI91E9VZ0w2l6Z8XvOwwbnqei09NpYfCWggMtdjWuBB6E23XaPA39ncHY4i4A9McII9QvdO0x8L28PynvEDbxVZ5bo4sZIXcGYjzLbHxLSW39gPZa7Tn2asxXC0oA2aB9cn7p3RPJC2x8jm5dXO6Nybgoenhu5dE7dE0aqMqqqorIWYJnVNQVS1Tn4vCqHDHolc0SbuGEA5qMJ0Vy7R0qGx9VsKEYWa08d5aGOSyvHpGV2jqT8FY/UpMlaLVZcLK1m6nKtMJ0DfsqHlFluEPI1SdDxx5TSgbZCsblHQ7hLKK4zNowvVFjsL1YOzUYVhymEeyAhGUwZsuqvPimoQMqLqHIJ5Siqg1ajSWd0JDTUb3WsAL83OawefeOyeyVkdO0NBEr7csMHlexd6+yuYWs7nIZyxAC7jwg7Yu4+Q/PZOOxU7GSSNa3hvHxXJu53C4DP/kdl89qNbkc+5Id5hEdnNYc2rieTZpd8KToGyAsHsSD6LS8eMxuvUTkyuU/j6pW6twvGOLN+HkegSDUO2F3F0gcCc8JBaR4WO1lcW8U5Dj8u4v8ARKu1unukcCOHawAOQB1XFHob0sp+1MMhIJAJ67lW6bqLeMhp7t8dPRZ6LRbEcTQ63IpkWBtrYty5JWKmX9axtQhaqbxSdtebKDqm6Rr6ioQb3XwvXFUyushNG6RE02Zghrb2JIvxE9PIr3Xa+Onju97Re4EcYAMltm9bLJ6pqD4y58brEBrfA55+5Wbq6t8ruORxcdrnkOgHILXj4/russ+aYTU9ayj7R0kmZoXxvO72yPc0+O+PZaagrKctuxxI6hzXW818pDVZES03BLT1BIK7NT+OC2/19fjqIt+MeoIKKg3uC0g7Wc0/ZfKqbWZW7kSD+bf3/qmcWvk7HguNnAm3kQj/ADn4X+l/X0WdDzrGadrUrGm7y8A3B4viI/T+04l+IZG8DY7H4jb8Lv5bfi/us8+OtMeSHNUcJY91kFpWsSVDpHEBsTRZgxe5OM+QKJebpa0N7pjpsnNPKc3WcohkBaWmGFMXQeoMus1qI71lra9tmlZDUPmUZNsPFJGELOir4Q00ZS2WSlsyLpZblK5AQUVRPylezwy0fNdhchmzhcs9N/tmoQjL4Q8QVt10VyyBagovQ6QOfxvF2sHFa1w53Jv5+nirKagDu/IXNZuA0Xkk8ug8T6K6urGsYWxtLBtm17dFrx8f7WXJyfkAV8zfiEi29zZVagA4B56WSmR93JicxWJA5lx5Ac/rb1W+9sNaBNj6EWGS7k0dShaqovhtwBkciT+I+P2Uqie/dbcNHLm49XeP2QpWeVaYx9Wq4TU/Cnjc5nxI2TXacgube3pcpRqemNY7iNVKJDfi47G/kRb2RP8Aw01ASRGBx70Ju2/NjiT9HcXoQtLqukxSN71vDAXF5bHoYXclYCOGRhuypBJ5AEg+hKL4Kt1sxHxHELp3D2fjbkWPmAiPgW2StXrZXA13D3sFWhXSsVBkCg0i5A19RYKVXVho3SoSfEdfkNvHxTTS7XX2YBzc659B/cJMwph2jceNvQN+pP8AhK2ldXF1HHy95CmqwBDseiGOW8c9WAKS8CkrSsjxkYPUYK9lkc4CPlfZosCTubDmoMKt093+uy//AFGfX/CWXgnrVUdIIIy0EkuN3Hle1rAdFZGr5WYVlLFcrj+rXVMZBemU5OVooI0FRssmBfYJzoqC1JyyWo7rSanNhZ+Vtys8q1x8DRxq10avbGvRZZWgmqqdBtJC0VTClE8NitMaWlQlK5W/BXJlul7M4GfAZJTKKFkeZQHO5MJs1v8Au6nw280PSyiO/DZ7iLF9jwNH8txk+iGq5G/M4cRPMuOV18fF+1jycn5ivrdRLjggDoClVVNcKMk7bYbbyKElffAv0AGSVpaykQp+87rc4HXwRGoT2AiBvY3eRsT08h/VVB/whYWLyLG2RGOn+77IVTvU0rXe3hUCpOVTnKKuDtD1N1NM2VubXa9v4mncfY+YC3s3aVkgBDr48l8zamtC0X6ghY5yet+PKzptYNZHMq52tN6rHTQ9Lj1KHIPU+6y1K1+rGlqtdalkmruOwQMNPdFsp7Jah7tRBdIe97Jixlgq4Y7K2TZT6qdAK+l4hfqs7PHwuLei3BjHw7nYC5PRYiofxOLupJ8ui34t9sOXXSAKvjeqAvRhbyuezY9jlaEFFIjIytZdsbNJgKritID5fQ3RAah6n5gf1zTz8GPrS0WrH5XfXf0K0+nyNsCMgr5zG+4t7eCbaLqnwpAHOdwuNnbFh6OHQhRnxy9z1WOdx6fR4JrKc1RdAx1DSBaxHUc15JIFz1pjnuhq590G1FyG6qsubK9uqTpVIcKprsolzQoCMJbPTyd4sl9SBumUjBZKqqXknE1H4oXIZcrSyzXvYTbiaeY/W6lJWucRxG/IYAt6BCxTOHiOhzbxF1ZcbjvXyL7D05rtlc1i2xIvgD8TjYf39FF89sMv0Lz8x8ugVDyTkklehPZaQXFelQc5JUQeVCy9UrKFohF0M9jY7cvBC2XqVmzl00YNwq3xJbSVxbh2R15hNYpA4XBBXPljY3xymSmN5YdrhHU7roZ1wpwyFTVwwYFzclRbsl1dq4aC2PLju/k3y6lGONt6GWUk7W9otRAb8Fhyf3hHIfh81m1In1J3JXi6scfmacmWX1douClG7kVxUSEyXFqIhJ8FRGbjxC9YbG3t4LSVnTON1xt9kLI67vAf4U4pbZ8L+oVRxb9frdVld6TJra0N5j25hSJuoxuUnDn1TJq+ydfxNMRyW95l9+HmPQ/daZlIXeC+e9nqkR1MTjhvGGO6WdjPvf0X1mAC6w5MeynVBiisM5QNYAE/qiEg1Ig7LHPCaXeWyA3vACEfVtHNV1rSAs1WyuBvdZzjb8XLa0s9aAN0inq7uQhmcRuh5CRlVMNNMszkShepEKly5HzR9A/g3yPZVMNjbluuXLrrmlWFVkrlydERcVUSuXKKrFy9Xq5JTly5cgnL1pI2JHlhcuQF7ax/4r+divRWP6/QLlyXzP4f1f6jLVPdhziR0vj2VS9XKp0Tly5cmHFeL1ckEQ6xuiCLherk8U5Ojf8A3VrbkYzYXPiBg/YLlycTU2H+ysC5ctIhB3RfTdG1YyQsdc3LQHXH8Qw76gr1cs+TxOQ8y33JQlQAuXLlzqMr0XVsNwspq8drL1cpwbcAWFt1KoiwvVy0b30KI16uXKVv/9k="style="width:100px;height:100px;" alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abcd</p></h5>
                                    <p id="text"> Type:Stakeholder</p>
                                    <p>Stage:Ideation</p>
                                    <p>Location:Ahmedabad</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                    
                                    <img src="data:image/jpeg;base64,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" style="width:100px;height:100px;" alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abcd</p></h5>
                                    <p id="text"> Type:Stakeholder</p>
                                    <p>Stage:Ideation</p>
                                    <p>Location:Kanpur</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                    
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSviE3ar67oBWV77Uj_cimAxiImdfEDHr_pUtovrM4_Q3jZNltH" style="width:100px;height:100px;" alt="profile-image" class="profile">
                                    <h5 class="card-title"><p>Name:abcd</p></h5>
                                    <p id="text"> Type:Stakeholder</p>
                                    <p>Stage:Scaling</p>
                                    <p>Location:Ahmedabad</p>
                                        <a href="" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                        <div class="card-body pt-5">
                                        <img src="https://image.shutterstock.com/image-photo/handsome-young-man-smile-portrait-260nw-683197405.jpg" style="width:100px; height:100px;" alt="profile-image" class="profile">
                                        <h5 class="card-title"><p>Name:abcd</p></h5>
                                        <p id="text"> Type:Incubators</p>
                                        <p>Stage:Scaling</p>
                                        <p>Location:Ahmedabad</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-white mb-3" style="max-width: 18rem; border colour: #ffffff;">
</div>
                      </div>
                  </div>
              </div>              
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Startup Igniter 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>

</script>
@endsection