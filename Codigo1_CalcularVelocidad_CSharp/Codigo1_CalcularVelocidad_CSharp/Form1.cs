using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Codigo1_CalcularVelocidad_CSharp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            double dist, tiempo, veloci;

            dist = Convert.ToDouble(txtDist.Text);
            tiempo = Convert.ToDouble(txtTiempo.Text);

            veloci = dist / tiempo;

            MessageBox.Show("La Velocidad es de: " + veloci + " Km/h");
        }
    }
}
