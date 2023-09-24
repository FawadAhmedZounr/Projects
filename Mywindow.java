package com.practice;

import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.Date;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.SwingUtilities;
import javax.swing.Timer; // Import the correct Timer class

public class Mywindow extends JFrame {

    private JLabel heading;
    private JLabel clockLabel;
    private Font font = new Font("Arial", Font.BOLD, 35);

    public Mywindow() {
        setTitle("Clock");
        setSize(500, 200);
        setLocation(500, 160);
        createGui();
        startClock();
        setVisible(true);
    }

    public void createGui() {
        heading = new JLabel("MY CLOCK");
        clockLabel = new JLabel("CLOCK");
        heading.setFont(font);
        clockLabel.setFont(font);
        setLayout(new GridLayout(2, 1));
        add(heading);
        add(clockLabel);
    }

    public void startClock() {
        Timer timer = new Timer(1000, new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String dateTime = new Date().toLocaleString();
                clockLabel.setText(dateTime);
            }
        });
        timer.start();
    }
    
}
