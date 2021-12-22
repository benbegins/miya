<div class="guide-des-tailles" :class="{active: guideDesTailles}" @click.self="guideDesTailles = false">
    <div class="content">
        <div class="btn-close" @click="guideDesTailles = false">
            <img src="<?php echo get_template_directory_uri(  ); ?>/dist/img/icon-close.svg" alt="">
        </div>
        <div class="lg:w-5/6">
            <div class="table-container">
                <table>
                    <tr>
                        <th>Taille</th>
                        <th>XS</th>
                        <th>S</th>
                        <th>M</th>
                        <th>L</th>
                        <th>XL</th>
                    </tr>
                    <tr>
                        <td>Tour de pointrine (cm)</td>
                        <td>76-83</td>
                        <td>83-90</td>
                        <td>90-97</td>
                        <td>97-104</td>
                        <td>104-114</td>
                    </tr>
                    <tr>
                        <td>Tour de taille (cm)</td>
                        <td>60-67</td>
                        <td>67-74</td>
                        <td>74-81</td>
                        <td>81-88</td>
                        <td>88-98</td>
                    </tr>
                    <tr>
                        <td>Tour de hanche (cm)</td>
                        <td>84-91</td>
                        <td>91-98</td>
                        <td>98-105</td>
                        <td>105-112</td>
                        <td>112-120</td>
                    </tr>
                    <tr>
                        <td>Taille FR</td>
                        <td>34-36</td>
                        <td>38-40</td>
                        <td>42-44</td>
                        <td>46-48</td>
                        <td>50-52</td>
                    </tr>
                </table>    
            </div>
            
            
            <div class="mt-16">
                <p>Si vos mensurations sont à cheval sur deux tailles, choisissez la taille inférieure pour une coupe plus ajustée, ou la taille supérieure pour une coupe plus ample. Si votre tour de poitrine et votre tour de taille correspondent à deux tailles différentes, commandez plutôt la taille indiquée pour votre tour de poitrine.</p>
            </div>
        </div>
        <div class="mt-16 lg:mt-0">
            <h2>Comment prendre les mesures :</h2>

            <h3 class="mt-8">Tour de pointrine</h3>
            <p>Prenez les mesures autour de la partie la plus large de la poitrine, tout en gardant le ruban bien horizontal.</p>

            <h3 class="mt-8">Tour de taille</h3>
            <p>Prenez les mesures autour de la partie la plus étroite de la taille (en général, en dessous des côtes), tout en gardant le ruban bien horizontal..</p>

            <h3 class="mt-8">Tour de hanche</h3>
            <p>Prenez les mesures autour de la partie la plus large des hanches, tout en gardant le ruban bien horizontal.</p>
        </div>
    </div>
</div>
