import gradio as gr
import pandas as pd
import joblib
from model import analyze_responses

def predict(q1, q2, q3, q4, q5, q6, q7, q8, q9, q10):
    responses = {
        'q1': q1,
        'q2': q2,
        'q3': q3,
        'q4': q4,
        'q5': q5,
        'q6': q6,
        'q7': q7,
        'q8': q8,
        'q9': q9,
        'q10': q10
    }
    result = analyze_responses(responses)
    return f"Your result: {result['result']}"

options = ["Very Bad", "Bad", "Satisfactory", "Good", "Very Good"]

iface = gr.Interface(
    fn=predict,
    inputs=[gr.Radio(options, label=label) for label in [
        "How do you feel in social situations?",
        "Which type of work environment do you prefer?",
        "How do you approach solving problems?",
        "Do you enjoy taking leadership roles?",
        "How interested are you in creative tasks?",
        "What is your preferred work style?",
        "How confident are you in analyzing data or complex problems?",
        "How do you handle working under tight deadlines?",
        "Do you prefer working with technology or people?",
        "How do you feel about tackling complex, abstract problems?"
    ]],
    outputs="text",
    title="Psychometric Test for Career Guidance",
    description="Answer all questions and get your personality prediction!"
)

if __name__ == "__main__":
    iface.launch()